<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>比特币技术原理</h2>

<h1>基础设施搭建</h1>
<br>
<h3>账簿公开机制</h3>
<span >
    <p>对现有账簿进行如下改造：</p>
    <p>
        <span>1、账簿上不再记载用户的余额，而只记载每一笔交易。即记载每一笔交易的付款人、收款人和付款金额。只要账簿的初始状态确定，每一笔交易记录可靠并有时序，当前每个人持有多少钱是可以推算出来的。</span></p>
    <p>
        <span>2、账簿由私有改为公开，只要任何用户需要，都可以获得当前完整的账簿，账簿上记录了从账簿创建开始到当前所有的交易记录。</span></p>
        <br>
</span>

<h3>身份与签名机制（公钥加密系统）</h3>
<span>
	   <br>
       <p><span>一个只有签名者自己知道的密码，作为密钥。签名者用这个密钥可以对任意数据加密。得到一个数字签名。同时这个签字者对全世界公开一个“公钥”，意思即为公开的钥匙。其他人可以方便快速的用这个“公钥”解密签字，查看签字的解密后内容。如果有证据表明:解密签字后的内容，与加密者加密的内容相符 ，就能证明这个内容确实是加密者加密的。比如加密者用私钥加密了一个字符串，写着自己名字的签名。大家用公钥解开一看，便知道这个签名一定是加密者干的。</span></p>
	   <br>
       <p><span>最重要的是，比特币交易单这个签名和交易内容严格相关。一个人，用同样的私钥(印章/ 手印)签署不同内容的交易单，签出来的字也会不同。这一点是计算机算法比按手印更优越的地方。所以一旦用户对一个交易单签字了，且被其他人验证，就有两样事情他无法抵赖: 1 付 款方签字付款了; &nbsp;2 付款方的资金来源(包括金额)。</span></p>
       <br>
</span>
       

<h3>成立虚拟矿工组织（挖矿群体）</h3>
    <p>下一步，招募虚拟矿工，招募要求如下：</p>
    <p>
        <span>1、矿工以组为单位，一组可以是单独的一户，也可以是几户联合为一组</span></p>
    <p>
        <span>2、成为矿工不影响正常使用货币</span></p>
    <p>
        <span>3、矿工每天要花费一定时间从事比特币“挖矿”活动，但是不同于挖金矿，虚拟矿工不需要拿着工具去野外作业，在家里就可以完成工作</span></p>
    <p>
        <span>4、矿工有一定可能性获得报酬，在挖矿活动中付出的努力越多，获得报酬的可能性越大</span></p>
    <p>
        <span>5、矿工可以随时退出，也可以随时有新的矿工加进来</span></p>

        <br>

<h3>建立初始账簿（创世块）</h3>
    <p>
        <span>世界先记录10分钟里发生的所有交易单。接着用这些交易单创建一个账簿。账簿里记录了这些交易单。</span>
    </p>
    <p>
        <span>账簿创建后，成为记录全世界 10 分钟里发生交易的永久记录本。账簿属于这个世界。不属 于创建者。但是里面的钱归创建者。</span></p>
    <p>
        <span>账簿制造很难。不能随意创建。极其消耗电脑时间。大家先理解为那是一个艰难的计算过程，和扔几亿个</span>
        <span>骰子差不多 。要等到几亿个骰子的数字加起来刚刚符合要求 。如果网络上一个用户扔出的骰子符合要求，还要和其他正在扔骰子的用户比较 。看看谁扔的筛子更多。选出扔筛子最多的人制造的账簿。这要买很多 CPU/显卡来计算，要花电费。是个苦差事。创建一个账簿后，账簿里面的钱，是奖励这些创建账簿的人。也是这个世界钱的由来。账簿极难伪造，所以钱也很难造假。比现实世界造伪币难多了。</span>
    </p>
    <p>
        <span>世界中，整个世界账簿每 10 分钟产生一个的速度不会改变。不管有多少试图创建账簿的用 户在同时努力，每10分钟只会有一个新账簿被创建出来。这是算法决定的。算法具体的后面讲。创建出一个新的账簿，这个用户就发了一笔小财。每10分钟会有一个幸运儿。</span>
        <span>在比特币互联网数字世界里，2040年前，只要有强力矿机，就能挖出矿(创建账簿)，随即获得钱(不用卖矿)。</span>
    </p>

    <p>
        <span>总得来讲，账簿是算出来的，钱也是凭空产生的。之所以有人愿意花现实世界的钱去购买，一定是有某种原因的。后面再讲。归根结底是必须有人愿意。比如类似炒股票，抄黄金。低价买高价卖。股票是纸，黄金是用处很小的金属。之所以有人愿意买，是因为卖得出去，能换成现实世界的物品或者货币。</span></p>
    <p>
        <span>提一句，挖矿到最后，账簿本身就没有比特币产出了。但是由于交易频繁，交易过程中可 能因为交易数量和交易单分支过大 ，会产生一些交易费。这个交易费会直接给予交易单所在账簿的制造人。这么做是为了鼓励在2100万比特币挖完之后，依然有动力继续制造账簿。没有账簿 就没有比特币交易体系。账簿必须不断制造下去。否则比特币体系就完蛋了。(没钱谁还挖矿，没矿这世界就坍塌，这真的不是个坑么?)&nbsp;</span>
    </p>

    <br>


<h3>支付与交易</h3>
	<p>
        <span>做了这么多铺垫，终于说到重点了，下面说一下在这样一个体系下如何完成支付。以老张付给老李10个比特币为例。</span>
    </p>
<br>
<h3>付款人签署交易单</h3>
	<p>为了支付10个比特币，老张首先要询问老李的标识字符串，例如是“ABCDEFG”，同时老张也有一个标识字符串例如是“HIJKLMN”，然后老张写一张单子，内容为“HILKLMN支付10比特币给ABCDEFG”，然后用自己的保密印章改一个章，将这张单子交给老李。另外为了便于追溯这笔钱的来源，还要在单子里注明这笔钱的来源记在哪一页，例如这个单子里，老张的10比特币来自建立账簿时系统的赠送，记录在账簿第一页。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/05.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/05.png" style="border: 0px;"></p>

<h3>收款人确认单据签署人</h3>
	<p>老李拿到这个单子后，需要确认这个单子确实是来自“HIJKLMN”这个人（也就是老张）签署的，这个并不困难。因为单子上必须有保密章，老李拿出印章扫描器，扫一下章，如果液晶屏显示出的字符和付款人字符是一致的（这里是“HIJKLMN”），就可以确认单子确实是付款人签署的。这是因为根据保密印章的机制，没有其他人可以伪造印章，任何一个人只要扫描一下印章，都可以确认单子的付款人和盖章人是否一致。</p>

<h3>收款人确认付款人余额</h3>
	<p><span>这个系统到目前还是很有问题。通过保密印章，收款人虽然可以确认付款人确实签署了这份单子，但是无法自行确认付款人是否有足够的余额支付。这个系统是分布式货币系统，不依赖任何中央人物，所以不会有一个或少数几个人负责这件事，最终承担这份工作的是之前所提到的矿工组织。老张、老李和其他任何使用比特币进行交易的用户都依赖矿工组织的工作才能完成交易。</span></p>

<h3>矿工的工作</h3>
    <p>矿工的工作是整个系统的核心，也是最复杂性最高的地方。下面逐步介绍矿工的工作内容和目的。</p>
<h3>矿工的工具</h3>
    <p>俗话说，工欲善其事，必先利其器。比特币矿工虽然不用铁撅、铁锨和探照灯等工具，不过也要有一些必备的东西。</p>
    <p>初始账簿。每个组首先自己复制一份初始账簿，初始账簿只有一页，记录了系统的第一次赠送</p>
    <p>空账簿纸。每个矿工有若干账簿纸，每一页纸上仅有账簿结构，没有填内容，具体内容的书写规则后面讲述。下面是一张空账簿纸的样子，各个字段的意义后面会说到</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/06.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/06.png" style="border: 0px;"></p>
    <p>编码生成器（哈希函数）。编号生成器有如下功能：</p>
    <p>
        <span>生成的编号仅与账簿纸上填入的内容有关，与填写人、字体、填写时间等因素均无关内容相同的账簿纸生成的编号总是相同，但是如果内容哪怕只改一个字符，编号就会面目全非。编码生成器在打印编码时还需要将所有填入账簿纸的交易单放入，机器会扫描交易单和填入交易单的一致性，尤其是保密印章，如果发现保密印章和付款人不一致，会拒绝打印编码将一张已打印的账簿纸放入，机器会判定编号是否是有效的机器打印，并且判定编号和内容是否一致，这个编号无法伪造交易单收件箱。每个矿工需要在门口挂一个箱子用于收集交易单。公告板。每个矿工同样需要一个公告板公示一些信息。有了上面的工具，矿工组织就可以开工了！</span></p>

<h3>收集交易单</h3>
	<p>规定，每笔交易的发起人，不但要将交易单给到收款人，还要同时复制若干份一模一样的交易单投递到每个矿工的收件箱里。</p>
    <p>矿工的人定期到自己的收件箱里把收集到的交易单一并取出来。</p>

<h3>填写账簿</h3>
	<p>此时拿出一张空的账簿纸，把这些交易填写到“交易清单”一栏，同时找到当前账簿最后一页，将最后一页的编号抄写到“上一张账单编号一栏”。注意还有个“幸运数字”，可以随便填上一个数字，如12345。然后，将这样账簿纸放入编号生成器，打印好编号，一张账簿就算完成了。</p>
    <p>如果你以为矿工的工作就这么简单，那就大错特错了，有个变态的规定：只有编号的前10个数均为0，这页账簿纸才算有效。</p>
    <p>根据之前对编号生成器的描述，要修改编号，只能修改账簿纸的内容，而“交易清单”和“上一张账簿纸编号”是不能随便改的，那么只能改幸运数字了。于是为了生成有效的账簿纸，矿工就不断抄写账簿纸，但每张纸的幸运数字都不同，然后不断的重复将纸放入编码器，如果生成的编号不符合规定，这张纸就算废了，重复这个过程直到生成一串有效的编号。</p>
    <p>我们知道，如果编号的每一个数字都是随机的，那么平均写1000多张幸运数字不同的纸才能获得一个有效的编号。</p>
    <p>这就奇怪了，这些矿工为什么要拼命干这看似无意义的事情呢？矿工是有报酬的，这就是矿工的动力了。规定：每一张账簿纸的交易清单第一条交易为“系统给这个矿工支付50个比特币”。也就是说，如果你生成了一张有意义的账簿纸，并且被所有挖矿矿工接受了，那么就意味着这条交易也被接受了，你的挖矿矿工获得了50个比特币。</p>
    <p>这就是矿工被叫做矿工的原因，也是为什么之前说随着交易和矿工的活动，比特币的数量会不断增多。例如下面是一个挖矿过程，这个矿工的公共比特币帐号为“UVWXYZ”。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/07.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/07.png" style="border: 0px;"></p>
    <p>在幸运数字尝试到“533”时，系统生成了一页有效账簿。</p>
    <br>
<h3>确认账簿</h3>
	<p>当某挖矿幸运的生成了一张有意义的账簿，为了得到奖励，必须立刻广播账簿请其它矿工确认自己的工作。</p>
    <p>规定，当某个矿工接到其他矿工送来的账簿纸时，必须立即停下手里的挖矿工作进行账簿确认。</p>
    <p>需要确认的信息有三个：</p>
    <p>
        <span>1、账簿的编号有效</span></p>
    <p>
        <span>2、账簿的前一页账簿有效</span></p>
    <p>
        <span>3、交易清单有效</span></p>
    <p>首先看第一个，这个确认比较简单。只要将送来的账簿纸放入编码生成器进行验证，如果验证通过，则编号有效。</p>
    <p>第二部分需要将账簿页上的“上一页账簿纸编号”和这个矿工目前保存的有效账簿最后一页编号比对，如果相同则确认，如果不同，需要顺着已有账簿向前比对，直到找到这个编号的页。如果没有找到指定的“上一页账簿纸编号”对应的页，这个矿工会将此页丢掉。不予确认。</p>
    <p>注意，由上面的机制可以保证，如果各个矿工手里的账簿纸是相同的，那么他们都能按同样的顺序装订成相同的账簿。因为后面一张纸的编号总是依赖前面的纸的编号，编码生成器的机制保证了所有合法账簿纸的相对先后顺序在每个矿工那里都是相同的（可能会有分支，但不会出现环，后面细讲）。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/08.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/08.png" style="border: 0px;"></p>
    <p>最后是如何确认交易清单有效，其实也就是要确认当前每笔交易的付款人有足够的余额支付这笔钱。由于交易信息里包含这笔钱是如何来的，还包含了记录来源交易的账单编号。例如，HIJKLMN要给ABCDEFG10个比特币，并注明了这10个比特币来自之前OPQRST支付给HIJKLMN的一笔交易，确认时首先要确认之前这笔交易是否存在，同时还要检查HIJKLMN在这之前没有将这10个比特币支付给别人。这一切确认后，这笔交易有效性就被确认了。</p>
    <p>其中第一笔是系统奖励给生成这页账簿的矿工的50个，这笔交易大家都默认承认，后面的只要按照上述方法追溯，就可以确认HIJKLMN是否当前真有10个比特币支付给ABCDEFG。</p>
    <p>如果完成了所有了上述验证并全部通过，这个矿工就认可了上述账簿纸有效，然后将这张账簿纸并入矿工的主账簿，舍弃目前正在进行的工作，后面的挖矿工作会基于这本更新后的主账本进行。</p>

<h3>账簿确认反馈</h3>
	<p>对于挖矿矿工来说，当账簿纸送出去后，如果后面有收到其他矿工送来的账簿纸，其“上一页账簿纸编号”为自己之前送出去的账簿纸，那么就表示他们的工作成功被其他矿工认可了，因为已经有矿工基于他们的账簿纸继续工作了。此时，可以粗略的说可以认为已经得到了50个比特币。</p>
    <p >另外，任何一个矿工当新生成有效账簿纸或确认了别的矿工的账簿纸时，就将最新被这个矿工承认的交易写到公告牌上，那么收款人只要发现相关交易被各个矿工认可了，基本就可以认为这笔钱已经到了自己的账上，后面他就可以在付款时将钱的来源指向这笔交易了。</p>
    <p>以上就是整个比特币的支付体系。下面我们来分析一下，这个体系为什么可以工作下去，以及这个体系可能面临的风险。</p>
<br>
<br>

<h1>工作机制分析</h1>
<br>
<h3>如果同时收到两份合法的账簿页怎么办？</h3>
	<p>注意在上面的运行机制中，各个挖矿矿工是并行工作的，因此完全可能出现这样的情况：某矿工收到两份不一样的账簿页，它们都基于当前这个矿工的主账簿的最后一页，并且内容也都完全合法，怎么办？</p>
    <p>关于这个问题，矿工不应该以线性方式组织账簿，而应该以树状组织账簿，任何时刻，都以当前最长分支作为主账簿，但是保留其它分支。举个例子，某矿工同时收到A、B两份账簿页，经核算都是合法的，此时矿工应该将两页以分叉的形式组织起来，如下图所示：</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/09.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/09.png" style="border: 0px;"></p>
    <p>黑色表示当前账簿主干。此时，可以随便选择一个页作为当前主分支，例如选择A：</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/10.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/10.png" style="border: 0px;"></p>
    <p>此时如果有一个新的账簿页是基于A的，那么这个主干就延续下去：</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/11.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/11.png" style="border: 0px;"></p>
    <p>如果这个主干一直这么延续下去，表示大家基本都以A为主干，B就会被遗忘。但是也有可能忽然B变成更长了：</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/12.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/12.png" style="border: 0px;"></p>
    <p>那么我们就需要将B分支作为当前主干，基于这个分支进行后续工作。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/13.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/13.png" style="border: 0px;"></p>
    <p>从局部来看，虽然在某一时刻各个矿工的账簿主干可能存在不一致，但大方向是一致的，那些偶尔由于不同步产生的小分支，会很快被淹没在历史中。</p></h1>
<br>
<h3>如果挖矿矿工有人伪造账簿怎么办</h3>
	<p>关于这个问题，只要挖矿组织中大多数人是诚实的，这个系统就可靠，具体分几个方面给予答复。</p>
    <p>首先，基于保密印章机制，没有人能伪造他人身份进行付款，因为编码生成器在打印编码时会核对所有交易单的保密印章，印章和付款人不一致会拒绝打印。</p>
    <p>而且诚实的矿工也不会承认不合法的交易（如某笔交易付款方余额不够）。</p>
    <p>所以只有一种可能的攻击行为，即在收款人确认收款后，从另一条分支上建立另外的交易单，取消之前的付款，而将同一笔钱再次付款给另一个人（即所谓的double-spending问题）。下面同样用一个例子说明这个问题。</p>
    <p>先假设有一个攻击者拥有10个比特币，他准备将这笔钱同时支付给两名受害者A和B，并都得到承认。</p>
    <p>第一步，攻击者准备从受害者A手里买10比特币的黄金，他签署交易单给受害者A，转10个比特币给受害者A。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/14.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/14.png" style="border: 0px;"></p>
    <p>第二步，这笔交易在最新的账簿页中被确认，并被各个挖矿矿工公告出来。受害人A看到公告，确认比特币到账，给了攻击者10个比特币等值的黄金。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/15.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/15.png" style="border: 0px;"></p>
    <p>第三步，攻击者找到账簿，从包含刚才交易的账簿页的前一页做出一个分支，生成更多的账单页，超过刚才的分支。由于此时刚才攻击者制造的分支变成了主干分支，而包含受害者A得到钱的分支变成了旁支，因此挖矿组织不再承认刚才的转账，受害者A得到的10比特币被取消了。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/16.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/16.png" style="border: 0px;"></p>
    <p>第四步，攻击者可以再次签署交易单，将同一笔钱支付给受害者B。受害者B确认钱到账后，支付给攻击者等值黄金。</p>
    <p class="picture" style="word-wrap: break-word; margin: 5px 0px; font-size: medium; color: rgb(90, 90, 90); text-align: center; font-family: &quot;&quot;;">
        <img alt="" src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/17.png" data-ke-src="http://blog.codinglabs.org/uploads/pictures/bitcoin-mechanism-make-easy/17.png" style="border: 0px;"></p>
    <p>至此，攻击者将10个比特币花了两次，从两名受害者那里各购得等值黄金。攻击者还可以如法炮制，取消与受害者B的转账，将同一笔钱再支付给其他人……</p>
    <p>关于这种攻击，给出的解决方案是，建议收款人不要在公告挂出时立即确认交易完成，而是应该再看一段时间，等待各个挖矿矿工再挂出6张确认账簿，并且之前的账簿没有被取消，才确认钱已到账。</p>
    <p>之前设定变态的编号规则，正是为了防御这一点。根据前面所述，生成有效账簿页不是那么简单的，要花费大量的人力反复试不同的幸运数字，而且过程完全是碰运气。如果某账簿页包含你收到钱的确认，并且在后面又延续了6个，那么攻击者想要在落后6页的情况下从另一个分支赶超当前主分支是非常困难的，除非攻击者拥有非常多的人力，超过其他所有诚实矿工的人力之和。</p>
    <p>而且，如果攻击者有如此多人力，与其花这么大力气搞这种攻击，还不如做良民挖矿来的收益大。这就从动机上杜绝了攻击的形成。</p>
<br>
<h3>比特币会一直增加下去，岂不是会严重通货膨胀</h3>
	<p>矿工组织的操作细则手册会说明，刚开始我们协议每生成一页账簿，奖励矿工50个比特币，后面，每当账簿增加21,000页，奖励就减半，例如当达到210,000页后，每生成一页账簿奖励25个比特币，420,000页后，每生成一页奖励12.5个，依次类推，等账簿达到6,930,000页后，新生成账簿页就没有奖励了。此时比特币全量约为21,000,000个，这就是比特币的总量，所以不会无限增加下去。</p>
<br>
<h3>没有奖励后，就没人做矿工了，岂不是没人帮忙确认交易了</h3>
	<p>到时，矿工的收益会由挖矿所得变为收取手续费。例如，你在转账时可以指定其中1%作为手续费支付给生成账簿页的矿工，各个矿工会挑选手续费高的交易单优先确认。</p>
<br>
<h3>矿工如果越来越多，比特币生成速度会变快吗</h3>
	<p>不会。虽然可以任意加入和退出矿工组织，导致矿工人数变化，每个矿工也会拿到一个编码生成器，不过我已经在编码生成器中加入了调控机制，当前工作的编码生成器越多，每个机器的效率就越低，保证新账簿页生成速率不变。</p>
<br>
<h3>虽然每个人的代号是匿名的，但如果泄露了某个人的代号，账簿又是公开的，岂不是他的所有账目都查出来了</h3>
	<p>确实是这样的。例如你要和某人交易，必然要要到他的代号才能填写交易单。因为收款人一栏要填入那人的代号。不过可以提供无限制的保密印章，建议每一次交易用不同的保密印章，这样查账簿就追查不到同一个人的所有账目了。</p>
    <p>答疑完毕。</p>
</h1>


            </div>
        </div>
    </div>
</div>