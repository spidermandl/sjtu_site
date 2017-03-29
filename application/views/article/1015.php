<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>youtube视频技术架构</h2>
                <div>
                    <span >YouTube发展迅速，每天超过1亿的视频点击量，但只有很少人在维护站点和确保伸缩性。这点和PlentyOfFish类似，少数人维护庞大系统。是什么原因呢？放心绝对不是靠人品，也不是靠寂寞，下面就来看看YouTube的整体技术架构吧。</span>
                    <br  />
                    <b style="font-size:14px;">平台</b>
                    <br  />
                    <span >1、Apache</span>
                    <br  />
                    <span >2、Python</span>
                    <br  />
                    <span >3、Linux(SuSe)</span>
                    <br  />
                    <span >4、MySQL</span>
                    <br  />
                    <span >5、psyco，一个动态的Python到C的编译器</span>
                    <br  />
                    <span >6、lighttpd代替Apache做视频查看</span>
                    <br  />
                    <b style="font-size:14px;">
                        <br />状态</b>
                    <br  />
                    <br  />
                    <span >1、支持每天超过1亿的视频点击量</span>
                    <br  />
                    <span >2、成立于2005年2月</span>
                    <br  />
                    <span >3、于2006年3月达到每天3千万的视频点击量</span>
                    <br  />
                    <span >4、于2006年7月达到每天1亿的视频点击量</span>
                    <br  />
                    <span >5、2个系统管理员，2个伸缩性软件架构师</span>
                    <br  />
                    <span >6、2个软件开发工程师，2个网络工程师，1个DBA</span>
                    <br  />
                    <br  />
                    <b style="font-size:14px;">Web服务器</b>
                    <br  />
                    <br  />
                    <span >1，NetScaler用于负载均衡和静态内容缓存</span>
                    <br  />
                    <span >2，使用mod_fast_cgi运行Apache</span>
                    <br  />
                    <span >3，使用一个Python应用服务器来处理请求的路由</span>
                    <br  />
                    <span >4，应用服务器与多个数据库和其他信息源交互来获取数据和格式化html页面</span>
                    <br  />
                    <span >5，一般可以通过添加更多的机器来在Web层提高伸缩性</span>
                    <br  />
                    <span >6，Python的Web层代码通常不是性能瓶颈，大部分时间阻塞在RPC</span>
                    <br  />
                    <span >7，Python允许快速而灵活的开发和部署</span>
                    <br  />
                    <span >8，通常每个页面服务少于100毫秒的时间</span>
                    <br  />
                    <span >9，使用psyco(一个类似于JIT编译器的动态的Python到C的编译器)来优化内部循环</span>
                    <br  />
                    <span >10，对于像加密等密集型CPU活动，使用C扩展</span>
                    <br  />
                    <span >11，对于一些开销昂贵的块使用预先生成并缓存的html</span>
                    <br  />
                    <span >12，数据库里使用行级缓存</span>
                    <br  />
                    <span >13，缓存完整的Python对象</span>
                    <br  />
                    <span >14，有些数据被计算出来并发送给各个程序，所以这些值缓存在本地内存中。这是个使用不当的策略。</span>
                    <br  />
                    <span >&nbsp;&nbsp;&nbsp; 应用服务器里最快的缓存将预先计算的值发送给所有服务器也花不了多少时间。只需弄一个代理来监听更改，预计算，然后发送。</span>
                    <br  />
                    <b style="font-size:14px;">
                        <br />视频服务</b>
                    <br  />
                    <br  />
                    <span >1，花费包括带宽，硬件和能源消耗</span>
                    <br  />
                    <span >2，每个视频由一个迷你集群来host，每个视频被超过一台机器持有</span>
                    <br  />
                    <span >3，使用一个集群意味着：</span>
                    <br  />
                    <span >&nbsp;&nbsp; -更多的硬盘来持有内容意味着更快的速度</span>
                    <br  />
                    <span >&nbsp;&nbsp; -failover。如果一台机器出故障了，另外的机器可以继续服务</span>
                    <br  />
                    <span >&nbsp;&nbsp; -在线备份</span>
                    <br  />
                    <span >4，使用lighttpd作为Web服务器来提供视频服务：</span>
                    <br  />
                    <span >&nbsp;&nbsp; -Apache开销太大</span>
                    <br  />
                    <span >&nbsp;&nbsp; -使用epoll来等待多个fds</span>
                    <br  />
                    <span >&nbsp;&nbsp; -从单进程配置转变为多进程配置来处理更多的连接</span>
                    <br  />
                    <span >5，大部分流行的内容移到CDN：</span>
                    <br  />
                    <span >&nbsp; -CDN在多个地方备份内容，这样内容离用户更近的机会就会更高</span>
                    <br  />
                    <span >&nbsp; -CDN机器经常内存不足，因为内容太流行以致很少有内容进出内存的颠簸</span>
                    <br  />
                    <span >6，不太流行的内容(每天1-20浏览次数)在许多colo站点使用YouTube服务器</span>
                    <br  />
                    <span >&nbsp; -长尾效应。一个视频可以有多个播放，但是许多视频正在播放。随机硬盘块被访问</span>
                    <br  />
                    <span >&nbsp; -在这种情况下缓存不会很好，所以花钱在更多的缓存上可能没太大意义。</span>
                    <br  />
                    <span >&nbsp; -调节RAID控制并注意其他低级问题</span>
                    <br  />
                    <span >&nbsp; -调节每台机器上的内存，不要太多也不要太少</span>
                    <br  />
                    <b style="font-size:14px;">
                        <br />视频服务关键点</b>
                    <br  />
                    <br  />
                    <span >1，保持简单和廉价</span>
                    <br  />
                    <span >2，保持简单网络路径，在内容和用户间不要有太多设备</span>
                    <br  />
                    <span >3，使用常用硬件，昂贵的硬件很难找到帮助文档</span>
                    <br  />
                    <span >4，使用简单而常见的工具，使用构建在Linux里或之上的大部分工具</span>
                    <br  />
                    <span >5，很好的处理随机查找(SATA，tweaks)</span>
                    <br  />
                    <b style="font-size:14px;">
                        <br />缩略图服务</b>
                    <br  />
                    <br  />
                    <span >1，做到高效令人惊奇的难</span>
                    <br  />
                    <span >2，每个视频大概4张缩略图，所以缩略图比视频多很多</span>
                    <br  />
                    <span >3，缩略图仅仅host在几个机器上</span>
                    <br  />
                    <span >4，持有一些小东西所遇到的问题：</span>
                    <br  />
                    <span >&nbsp;&nbsp; -OS级别的大量的硬盘查找和inode和页面缓存问题</span>
                    <br  />
                    <span >&nbsp;&nbsp; -单目录文件限制，特别是Ext3，后来移到多分层的结构。内核2.6的最近改进可能让 Ext3允许大目录，但在一个文件系统里存储大量文件不是个好主意</span>
                    <br  />
                    <span >&nbsp;&nbsp; -每秒大量的请求，因为Web页面可能在页面上显示60个缩略图</span>
                    <br  />
                    <span >&nbsp;&nbsp; -在这种高负载下Apache表现的非常糟糕</span>
                    <br  />
                    <span >&nbsp;&nbsp; -在Apache前端使用squid，这种方式工作了一段时间，但是由于负载继续增加而以失败告终。它让每秒300个请求变为20个</span>
                    <br  />
                    <span >&nbsp;&nbsp; -尝试使用lighttpd但是由于使用单线程它陷于困境。遇到多进程的问题，因为它们各自保持自己单独的缓存</span>
                    <br  />
                    <span >&nbsp;&nbsp; -如此多的图片以致一台新机器只能接管24小时</span>
                    <br  />
                    <span >&nbsp;&nbsp; -重启机器需要6-10小时来缓存</span>
                    <br  />
                    <span >5，为了解决所有这些问题YouTube开始使用Google的BigTable，一个分布式数据存储：</span>
                    <br  />
                    <span >&nbsp;&nbsp; -避免小文件问题，因为它将文件收集到一起</span>
                    <br  />
                    <span >&nbsp;&nbsp; -快，错误容忍</span>
                    <br  />
                    <span >&nbsp;&nbsp; -更低的延迟，因为它使用分布式多级缓存，该缓存与多个不同collocation站点工作</span>
                    <br  />
                    <span >&nbsp;&nbsp; -更多信息参考Google Architecture，GoogleTalk Architecture和BigTable</span>
                    <br  />
                    <br  />
                    <b style="font-size:14px;">数据库</b>
                    <br  />
                    <br  />
                    <span >1，早期</span>
                    <br  />
                    <span >&nbsp;&nbsp; -使用MySQL来存储元数据，如用户，tags和描述</span>
                    <br  />
                    <span >&nbsp;&nbsp; -使用一整个10硬盘的RAID 10来存储数据</span>
                    <br  />
                    <span >&nbsp;&nbsp; -依赖于信用卡所以YouTube租用硬件</span>
                    <br  />
                    <span >&nbsp;&nbsp; -YouTube经过一个常见的革命：单服务器，然后单master和多read slaves，然后数据库分区，然后sharding方式</span>
                    <br  />
                    <span >&nbsp;&nbsp; -痛苦与备份延迟。master数据库是多线程的并且运行在一个大机器上所以它可以处理许多工作，slaves是单线程的并且通常运行在小一些的服务器上并且备份是异步的，所以slaves会远远落后于master</span>
                    <br  />
                    <span >&nbsp;&nbsp; -更新引起缓存失效，硬盘的慢I/O导致慢备份</span>
                    <br  />
                    <span >&nbsp;&nbsp; -使用备份架构需要花费大量的money来获得增加的写性能</span>
                    <br  />
                    <span >&nbsp;&nbsp; -YouTube的一个解决方案是通过把数据分成两个集群来将传输分出优先次序：一个视频查看池和一个一般的集群</span>
                    <br  />
                    <span >2，后期</span>
                    <br  />
                    <span >&nbsp;&nbsp; -数据库分区</span>
                    <br  />
                    <span >&nbsp;&nbsp; -分成shards，不同的用户指定到不同的shards</span>
                    <br  />
                    <span >&nbsp;&nbsp; -扩散读写</span>
                    <br  />
                    <span >&nbsp;&nbsp; -更好的缓存位置意味着更少的IO</span>
                    <br  />
                    <span >&nbsp;&nbsp; -导致硬件减少30%</span>
                    <br  />
                    <span >&nbsp;&nbsp; -备份延迟降低到0</span>
                    <br  />
                    <span >&nbsp;&nbsp; -现在可以任意提升数据库的伸缩性</span>
                    <br  />
                    <br  />
                    <b style="font-size:14px;">数据中心策略</b>
                    <br  />
                    <br  />
                    <span >1，依赖于信用卡，所以最初只能使用受管主机提供商</span>
                    <br  />
                    <span >2，受管主机提供商不能提供伸缩性，不能控制硬件或使用良好的网络协议</span>
                    <br  />
                    <span >3，YouTube改为使用colocation arrangement。现在YouTube可以自定义所有东西并且协定自己的契约</span>
                    <br  />
                    <span >4，使用5到6个数据中心加CDN</span>
                    <br  />
                    <span >5，视频来自任意的数据中心，不是最近的匹配或其他什么。如果一个视频足够流行则移到CDN</span>
                    <br  />
                    <span >6，依赖于视频带宽而不是真正的延迟。可以来自任何colo</span>
                    <br  />
                    <span >7，图片延迟很严重，特别是当一个页面有60张图片时</span>
                    <br  />
                    <span >8，使用BigTable将图片备份到不同的数据中心，代码查看谁是最近的</span>
                    <br  />
                    <br  />
                    <b style="font-size:14px;">实践总结</b>
                    <br  />
                    <br  />
                    <span >1，Stall for time。创造性和风险性的技巧让你在短期内解决问题而同时你会发现长期的解决方案</span>
                    <br  />
                    <span >2，Proioritize。找出你的服务中核心的东西并对你的资源分出优先级别</span>
                    <br  />
                    <span >3，Pick your battles。别怕将你的核心服务分出去。YouTube使用CDN来分布它们最流行的内容。创建自己的网络将花费太多时间和太多money</span>
                    <br  />
                    <span >4，Keep it simple！简单允许你更快的重新架构来回应问题</span>
                    <br  />
                    <span >5，Shard。Sharding帮助隔离存储，CPU，内存和IO，不仅仅是获得更多的写性能</span>
                    <br  />
                    <span >6，Constant iteration on bottlenecks：</span>
                    <br  />
                    <span >&nbsp;&nbsp; -软件：DB，缓存</span>
                    <br  />
                    <span >&nbsp;&nbsp; -OS：硬盘I/O</span>
                    <br  />
                    <span >&nbsp;&nbsp; -硬件：内存，RAID</span>
                    <br  />
                    <span >7，You succeed as a team。拥有一个跨越条律的了解整个系统并知道系统内部是什么样的团队，如安装打印机，安装机器，安装网络等等的人。</span>
                    <br  />
                    <span >&nbsp;&nbsp; With a good team all things are possible。</span>

                    
                </div>
            </div>
        </div>
    </div>
</div>