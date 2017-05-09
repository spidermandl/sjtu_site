<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>MySQL Innodb日志机制深入分析</h2>

<p>Innodb的事务日志是指Redo log，简称Log,保存在日志文件ib_logfile*里面。Innodb还有另外一个日志Undo log，但Undolog是存放在共享表空间里面的（ibdata*文件）。由于Log和Checkpoint紧密相关，因此将这两部分合在一起分析。</p>
名词解释：LSN，日志序列号，Innodb的日志序列号是一个64位的整型。</p><br />
<h3>1. 写入机制</strong></h3><br />
<p><strong>1.1. Log写入</strong></p>
<p>LSN实际上对应日志文件的偏移量，新的LSN＝旧的LSN + 写入的日志大小。举例如下：LSN＝1G，日志文件大小总共为600M，本次写入512字节，则实际写入操作为：</p>
<p>求出偏移量：由于LSN数值远大于日志文件大小，因此通过取余方式，得到偏移量为400M；</p>
<p>写入日志：找到偏移400M的位置，写入512字节日志内容，下一个事务的LSN就是1000000512；</p><br />
<p><strong>1.2. Checkpoint写入</strong></p>
<p>Innodb实现了Fuzzy Checkpoint的机制，每次取到最老的脏页，然后确保此脏页对应的LSN之前的LSN都已经写入日志文件，再将此脏页的LSN作为Checkpoint点记录到日志文件，意思就是“此LSN之前的LSN对应的日志和数据都已经写入磁盘文件”。恢复数据文件的时候，Innodb扫描日志文件，当发现LSN小于Checkpoint对应的LSN，就认为恢复已经完成。
Checkpoint写入的位置在日志文件开头固定的偏移量处，即每次写Checkpoint都覆盖之前的Checkpoint信息。</p>
<br />
<h3>2. 管理机制</h3>
<p>由于Checkpoint和日志紧密相关，将日志和Checkpoint一起说明，详细的实现机制如下：</p><br />
<p>
	<img src="../img/1027/1.gif" style="height:80% !important;width:80% !important;" />
</p>
<br />
<p>如上图所示，Innodb的一条事务日志共经历4个阶段：</p>
<p>创建阶段：事务创建一条日志；</p>
<p>日志刷盘：日志写入到磁盘上的日志文件；</p>
<p>数据刷盘：日志对应的脏页数据写入到磁盘上的数据文件；</p>
<p>写CKP：日志被当作Checkpoint写入日志文件；</p>
<br />
<p>对应这4个阶段，系统记录了4个日志相关的信息，用于其它各种处理使用：</p>
<p>Log sequence number（LSN1）：当前系统LSN最大值，新的事务日志LSN将在此基础上生成（LSN1+新日志的大小）；</p>
<p>Log flushed up to（LSN2）：当前已经写入日志文件的LSN；</p>
<p>Oldest modified data：log（LSN3）：当前最旧的脏页数据对应的LSN，写Checkpoint的时候直接将此LSN写入到日志文件；</p>
<p>Last checkpoint at（LSN4）：当前已经写入Checkpoint的LSN；</p>
<br />
<p>对于系统来说，以上4个LSN是递减的，即： LSN1>=LSN2>=LSN3>=LSN4 </p>
<p>具体的样例如下（使用show innodb status /G命令查看，Oldest modified data log没有显示）：</p>
<p>
	<img src="../img/1027/2.gif" style="height:80% !important;width:80% !important;" />
</p>
<br />
<h3>3. 保护机制</h3>
<p>Innodb的数据并不是实时写盘的，为了避免宕机时数据丢失，保证数据的ACID属性，Innodb至少要保证数据对应的日志不能丢失。对于不同的情况，Innodb采取不同的对策：</p>
<br />
<p><strong>宕机导致日志丢失</strong>:Innodb有日志刷盘机制，可以通过innodb_flush_log_at_trx_commit参数进行控制；</p>
<p><strong>日志覆盖导致日志丢失</strong>:Innodb日志文件大小是固定的，写入的时候通过取余来计算偏移量，这样存在两个LSN写入到同一位置的可能，后面写的把前面写得就覆盖了，以“写入机制”章节的样例为例，LSN＝100000000和LSN＝1600000000两个日志的偏移量是相同的了。这种情况下，为了保证数据一致性，必须要求LSN=1000000000对应的脏页数据都已经刷到磁盘中，也就是要求Last checkpoint对应的LSN一定要大于1000000000，否则覆盖后日志也没有了，数据也没有刷盘，一旦宕机，数据就丢失了。</p>
<br />
<p>为了解决第二种情况导致数据丢失的问题，Innodb实现了一套日志保护机制，详细实现如下：</p>
<p>
	<img src="../img/1027/3.gif" style="height:80% !important;width:80% !important;" />
</p>
<p>上图中，直线代表日志空间（Log cap，约等于日志文件总大小*0.8，0.8是一个安全系数)，Ckp age和Buf age是两个浮动的点，Buf async、Buf sync、Ckp async、Ckp sync是几个固定的点。各个概念的含义如下：</p>
<br />

<h3>Ckp age:</h3>
<p>LSN1- LSN4<br />
还没有做Checkpoint的日志范围，若Ckp age超过日志空间，说明被覆盖的日志（LSN1－LSN4－Log cap）对应日志和数据“可能”还没有刷到磁盘上<p>
<br />
<h3>Buf age:</h3>
<p>LSN1- LSN3<br />
还没有将脏页刷盘的日志的范围，若Buf age超过日志空间，说明被覆盖的日志（LSN1－LSN3－Log cap）对应数据“肯定”还没有刷到磁盘上</p><br />
<h3>Buf async:</h3>
<p>日志空间大小 * 7/8<br />
强制将Buf age-Buf async的脏页刷盘，此时事务还可以继续执行，所以为async，对事务的执行速度没有直接影响（有间接影响，例如CPU和磁盘更忙了，事务的执行速度可能受到影响）</p><br />
<h3>Buf sync:</h3>
<p>日志空间大小 * 15/16<br />
强制将2*(Buf age-Buf async)的脏页刷盘，此时事务停止执行，所以为sync，由于有大量的脏页刷盘，因此阻塞的时间比Ckp sync要长。</p><br />
<h3>Ckp async:</h3>
<p>日志空间大小 * 31/32<br />
强制写Checkpoint，此时事务还可以继续执行，所以为async，对事务的执行速度没有影响（间接影响也不大，因为写Checkpoint的操作比较简单）</p><br />
<h3>Ckp sync:</h3>
<p>日志空间大小 * 64/64<br />
强制写Checkpoint，此时事务停止执行，所以为sync，但由于写Checkpoint的操作比较简单，即使阻塞，时间也很短。</p><br /><br />

<p>当事务执行速度大于脏页刷盘速度时，Ckp age和Buf age会逐步增长，当达到async点的时候，强制进行脏页刷盘或者写Checkpoint，如果这样做还是赶不上事务执行的速度，则为了避免数据丢失，到达sync点的时候，会阻塞其它所有的事务，专门进行脏页刷盘或者写Checkpoint。</p><br />
<p>因此从理论上来说,只要事务执行速度大于脏页刷盘速度，最终都会触发日志保护机制，进而将事务阻塞，导致MySQL操作挂起。由于写Checkpoint本身的操作相比写脏页要简单，耗费时间也要少得多，且Ckp sync点在Buf sync点之后，因此绝大部分的阻塞都是阻塞在了Buf sync点，这也是当事务阻塞的时候，IO很高的原因，因为这个时候在不断的刷脏页数据到磁盘。例如如下截图的日志显示了很多事务阻塞在了Buf sync点：</p>
<p>
	<img src="../img/1027/4.gif" style="height:80% !important;width:80% !important;" />
</p>
附注：Innodb的日志保护机制实现可以参考log0log.c文件的void log_check_margins(void)函数。<br />



             </div>
        </div>
    </div>
</div>