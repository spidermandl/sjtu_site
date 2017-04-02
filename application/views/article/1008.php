<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>视频直播技术分析 六 （现代播放器原理）</h2>
				<br/>	

				<p>
					<span>近年来，多平台适配需求的增长导致了流媒体自适应码率播放的兴起，这迫使Web和移动开发者们必须重新思考视频技术的相关逻辑。首先，巨头们分分发布了 HLS、HDS 和 Smooth Streaming等协议，把所有相关细节都隐藏在它们专供的SDK中。开发者们没法自由的修改播放器中的多媒体引擎等逻辑：你没法修改自适应码率的规则和缓存大小，甚至是你切片的长度。这些播放器可能用起来简单，但是你没有太多去定制它的选择，即便是糟糕的功能也只能忍受。</span>
				</p>
				<br />
				<p>
					<span>但是随着不同应用场景的增加，可定制化功能的需求越来越强。仅仅是直播和点播之间，就存在不同的buffer管理、ABR 策略和缓存策略等方面的差别。这些需求催生了一系列更为底层关于多媒体操作API的诞生：Flash上面的 Netstream，HTML5上的Media Source Extensions，以及Android上的Media Codec，同时业界又出现了一个基于HTTP的标准流格式 MPEG-DASH。这些更高级的能力为开发者提供了更好的灵活性，让他们可以构建适合自己业务需求的播放器和多媒体引擎。</span>
				</p>
				<br />
				<p>
					<span>今天我们来分享一下如何构建一个现代播放器，以及构建这样一个播放器需要哪些关键组件。通常来说，一个典型的播放器可以分解成三部分：UI、多媒体引擎和解码器，如图 1 所示：</span>
				</p>
				<br />


				<p>
					<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhs3z0lQMdldN2Ce67OhNibGz4G1rLBKdesRHfCAkwmYunmgIGdyxgVBEw/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" />
				</p>
				<p>
					<span>图 1. 现代播放器架构</span>
				</p>
				<br />

				<p>
					<span>用户界面（UI）：这是播放器最上层的部分。它通过三部分不同的功能特性定义了终端用户的观看体验：皮肤（播放器的外观设计）、UI（所有可自定义的特性如播放列表和社交分享等）以及业务逻辑部分（特定的业务逻辑特性如广告、设备兼容性逻辑以及认证管理等）。</span>
				</p>
				<br />

				<p>
					<span>多媒体引擎：这里处理所有播放控制相关的逻辑，如描述文件的解析，视频片段的拉取，以及自适应码率规则的设定和切换等等，我们将在下文中详细讲解这部分内容。由于这些引擎一般和平台绑定的比较紧，因此可能需要使用多种不同的引擎才能覆盖所有平台。</span>
				</p>
				<br />

				<p>
					<span>解码器和 DRM 管理器：播放器最底层的部分是解码器和DRM管理器，这层的功能直接调用操作系统暴露出来的 API。解码器的主要功能在于解码并渲染视频内容，而 DRM 管理器则通过解密过程来控制是否有权播放。</span>
				</p>
				<br />

				<p>
					<span>接下来我们将使用例子来介绍各层所扮演的不同角色。</span>
				</p>
				<br />

				<h3>
					一、用户界面（UI）
				</h3>
				<p>
					<span>UI 层是播放器的最上层，它控制了你用户所能看到和交互的东西，同时也可以使用你自己的品牌来将其定制，为你的用户提供独特的用户体验。这一层最接近于我们说的前端开发部分。在 UI 内部，我们也包含了业务逻辑组件，这些组件构成了你播放体验的独特性，虽然终端用户没法直接和这部分功能进行交互。
					</span>
				</p>
				<br />
				<p>
					<span>UI 部分主要包含三大组件：</span>
				<p/>
				<br />
				<strong>1. 皮肤</strong>
				<br />
				<p>
					<span>皮肤是对播放器视觉相关部分的统称：进度控制条、按钮和动画图标等等，如图 2 所示。和大部分设计类的组件一样，这部分组件也是使用 CSS 来实现的，设计师或者开发者可以很方便的拿来集成（即便你使用的是 JW Player 和 Bitdash 这种整套解决方案）。&nbsp;</span>
				</p>
				<br />
				<p>
					<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhsfrbLWrhM3Oxc7ib6xg153WqFqH7XhhPsFUyfdzGBzLpUEzVbaNZPl6g/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" />
				</p>
				<br />
				<p>
					<span>图 2. 播放器皮肤</span>
				</p>
				<br />
				<strong>2. UI 逻辑</strong>

				<p>
					<span>UI 逻辑部分定义了播放过程中和用户交互方面所有可见的交互：播放列表、缩略图、播放频道的选择以及社交媒体分享等。基于你预期达到的播放体验，还可以往这部分中加入很多其它的功能特性，其中有很多以插件的形式存在了，或许可以从中找到一些灵感：</span><a><span>https://github.com/videojs/video.js/wiki/Plugins#community-plugins</span></a>
					<br />
					<span>UI逻辑部分包含的功能较多，我们不一一详细介绍，直接以Eurosport播放器的UI来作为例子直观感受一下这些功能。</span>
				</p>
				<p>
					<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhsVTiarc41JPdo0obkZgeyFPJHIotq5ialDo3bfA2LH6uD7MKStjSibCJiaQ/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" />
					<br />
					<span>图 3. Eurosport &nbsp;播放器的用户界面</span>
				</p>
				<br />

				<p>
					<span>从图 3 可以看出，除了传统的 UI 元素之外，还有一个非常有趣的特性，在用户观看DVR流媒体的时候，直播以小视窗的形式展示，观众可以通过这个小窗口随时回到直播中。由于布局或者UI和多媒体引擎完全独立，这些特性在HTML5中使用dash.js只需要几行代码就能实现。对于 UI 部分来说，最好的实现方式是让各种特性都以插件/模块的形式添加到 UI 核心模块中。
					</span>
				</p>
				<br />
				<strong>3. 业务逻辑</strong>
				<br />
				<p>
					<span>
						除了上面两部分「可见」的功能特性之外，还有一个不可见的部分，这部分构成了你业务的独特性：认证和支付、频道和播放列表的获取，以及广告等。这里也包含一些技术相关的东西，比如用于A/B测试模块，以及和设备相关的配置，这些配置用于在多种不同类型的设备之间选择多个不同的媒体引擎。
					</span>
				</p>
				<br />
				<p>
					<span>为了揭开底层隐藏的复杂性，我们在这里更详细的讲解一下这些模块：
					<br />
					设备检测与配置逻辑：这是最重要的特性之一，因为它将播放和渲染剥离开来了。例如，基于你浏览器的不同版本，播放器可能会自动为你选择一个基于 HTML5 MSE 的多媒体引擎 hls.js，或者为你选择一个基于 flash 的播放引擎 FlasHls 来播放 HLS 视频流。这部分的最大特点在于，无论你使用什么样的底层引擎，在上层都可以使用相同的 JavaScript 或者 CSS 来定制你的 UI 或者业务逻辑。</span>
				</p>
				<br />
	<p>
		<span>
			能够检测用户设备的能力允许你按需配置终端用户的体验：如果是在移动设备而非 4K 屏幕设备上播放，你可能需要从一个较低的码率开始。<br />
			<br />
			A/B 测试逻辑：A/B 测试是为了能够在生产环节中灰度部分用户。例如，你可能会给部分 Chrome 用户提供一个新的按钮或者新的多媒体引擎，并且还能保证它所有的工作都正常如期进行。<br />
			<br />
			广告（可选）：在客户端处理广告是最复杂的业务逻辑之一。如 videojs-contrib-ads 这个插件模块的流程图给出一样，插入广告的流程中包含多个步骤。对于 HTTP 视频流来说，你或多或少会用到一些已有的格式如 VAST、VPAID 或者 Google IMA，它们能够帮你从广告服务器中拉取视频广告（通常是过时的非自适应格式），放在视频的前期、中期和后期进行播放，且不可跳过。<br />
<br />
<strong>总结：</strong><br />
<br />
针对你的定制化需求，你可能选择使用包含所有经典功能的 JW Player 来播放（它也允许你定制部分功能），或者基于 Videojs 这样的开源播放器来定制你自己的功能特性。甚至为了在浏览器和原生播放器之间统一用户体验，你也可以考虑使用 React Native 来进行 UI 或者皮肤的开发，使用 Haxe 来进行业务逻辑的开发，这些优秀的库都可以在多种不同类型的设备之间共用同一套代码库。&nbsp;<br />
<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhshh2icCEibCyexnH20Via5fZXicJazMN2XiaLUGoFwNib45IG6dhEXIlCpUiaw/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" /><br />
</span>
	</p>
	<p>
		<span>图 4. 业务逻辑流程图</span>
	</p>
	<h2 style="font-weight:400;font-size:16px;color:#3E3E3E;font-family:&quot;background-color:#FFFFFF;">
		<span></span>
	</h2>
	<h2>
		二、多媒体引擎
	</h2>
	<p>
		<span>近年来，多媒体引擎更是以一种全新独立的组件出现在播放器架构中。在 MP4 时代，平台处理了所有播放相关的逻辑，而只将一部分多媒体处理相关的特性（仅仅是播放、暂停、拖拽和全屏模式等功能）开放给开发者。<br />
<br />
然而，新的基于 HTTP 的流媒体格式需要一种全新的组件来处理和控制新的复杂性：解析声明文件、下载视频片段、自适应码率监控以及决策指定等等甚至更多。起初，ABR 的复杂性被平台或者设备提供商处理了。然而，随着主播控制和定制播放器需求的递增，一些新的播放器中慢慢也开放了一些更为底层的 API（如 Web 上的 Media Source Extensons，Flash 上的 Netstream 以及 Android 平台的 Media Codec），并迅速吸引来了很多基于这些底层 API 的强大而健壮的多媒体引擎。</span>
	</p>
	<p>
		<span><br />
<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhsc8vOPv9nA7j7sFo5VEpJGarnJk4q8XACcItYdI8ZbmCzdDMGwAbppw/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" /><br />
<span>图 5. Google 提供的多媒体处理引擎 Shakaplayer 的数据流程图</span></span>
	</p>
	<p>
		<span><br />
接下来我们将详细讲解现代多媒体处理引擎中各组件的细节：<br />
<br />
<strong>1. 声明文件解释和解析器</strong><br />
<br />
在基于 HTTP 的视频流中，一切都是以一个描述文件开始。该声明文件包含了媒体服务器所需理解的元信息：有多少种不同类型的视频质量、语言以及字母等，它们分别是什么。解析器从 XML 文件（对于 HLS 来说则是一种特殊的 m3u8 文件）中取得描述信息，然后从这些信息中取得正确的视频信息。当然，媒体服务器的类型很多，并不是所有都正确的实现了规范，因此解析器可能需要处理一些额外的实现错误。<br />
<br />
一旦提取了视频信息，解析器则会从中解析出数据，用于构建流式的视觉图像，同时知道如何获取不同的视频片段。在某些多媒体引擎中，这些视觉图像先以一副抽象多媒体图的形式出现，然后在屏幕上绘制出不同 HTTP 视频流格式的差异特征。<br />
<br />
在直播流场景中，解析器也必须周期性的重新获取声明文件，以便获得最新的视频片段信息。<br />
<br />
<strong>2. 下载器（下载声明文件、多媒体片段以及密钥）</strong><br />
<br />
下载器是一个包装了处理 HTTP 请求原生 API 的模块。它不仅用于下载多媒体文件，在必要的时候也可以用于下载声明文件和 DRM 密钥。下载器在处理网络错误和重试方面扮演着非常重要的角色，同时能够收集当前可用带宽的数据。<br />
<br />
注意：下载多媒体文件可能使用 HTTP 协议，也可能使用别的协议，如点对点实时通信场景中的 WebRTC 协议。<br />
<br />
<strong>3. 流播放引擎</strong><br />
<br />
流播放引擎是和解码器 API 交互的中央模块，它将不同的多媒体片段导入编码器，同时处理多码率切换和播放时的差异性（如声明文件和视频切片的差异，以及卡顿时的自动跳帧）。<br />
<br />
<strong>4. 资源质量参数预估器（带宽、CPU 和帧率等）</strong></span>
	</p>
	<p>
		<span><br />
预估器从各种不同的维度获取数据（块大小，每片段下载时间，以及跳帧数），并将其汇聚起来用于估算用户可用的带宽和 CPU 计算能力。这是输出用于 ABR （Adaptive Bitrate, 自适应码率）切换控制器做判断。<br />
<br />
<strong>5. ABR 切换控制器</strong><br />
<br />
ABR 切换器可能是多媒体引擎中最为关键的部分——通常也是大家最为忽视的部分。该控制器读取预估器输出的数据（带宽和跳帧数），使用自定义算法根据这些数据做出判断，告诉流播放引擎是否需要切换视频或者音频质量。<br />
<br />
该领域有很多研究性的工作，其中最大的难点在于在再缓冲风险和切换频率（太频繁的切换可能导致糟糕的用户体验）之间找到平衡。<br />
<br />
<strong>6. DRM 管理器（可选组件）</strong><br />
<br />
今天所有的付费视频服务都基于 DRM 管理，而 DRM 则很大程度上依赖于平台或者设备，我们将在后续讲解播放器的时候看到。多媒体引擎中的 DRM 管理器是更底层解码器中内容解密 API 的包装。<br />
<br />
只要有可能，它会尽量通过抽象的方式来屏蔽浏览器或者操作系统实现细节的差异性。该组件通常和流处理引擎紧密连接在一起，因为它经常和解码器层交互。<br />
<br />
<strong>7. 格式转换复用器（可选组件）</strong></span>
	</p>
	<p>
		<span><strong><br />
</strong>后文中我们将看到，每个平台在封包和编码方面都有它的局限性（Flash 读的是 FLV 容器封装的 H.264/AAC 文件，MSE 读的是 ISOBMFF 容器封装的 H.264/AAC 文件）。这就导致了有些视频片段在解码之前需要进行格式转换。例如，有了 MPEG2-TS 到 ISOBMFF 的格式转换复用器之后，</span><span>hls.js</span><span>&nbsp;就能使用 MSE 格式的内容来播放 HLS 视频流。多媒体引擎层面的格式转换复用器曾经遭受质疑；然而，随着现代 JavaScript 或者 Flash 解释权性能的提升，它带来的性能损耗几乎可以忽略不计，对用户体验也不会造成多大的影响。<br />
<br />
<strong>总结</strong><br />
<br />
多媒体引擎中也有非常多的不同组件和特性，从字幕到截图到广告插入等等。接下来我们也会单独写一篇文章来对比多种不同引擎的差异，通过一些测试和市场数据来为引擎的选择给出一些实质性的指导。值得注意的是，要构建一个兼容各平台的播放器，提供多个可自由替换的多媒体引擎是非常重要的，因为底层解码器是和用户平台相关的，接下来我们将重点讲解这方面的内容。<br />
</span>
	</p>
	<h2 style="font-weight:400;font-size:16px;color:#3E3E3E;font-family:&quot;background-color:#FFFFFF;">
		<span></span>
	</h2>
	<h2>
		三、解码器和 DRM 管理器
	</h2>
	<p>
		<span>出于解码性能（解码器）和安全考虑（DRM），解码器和 DRM 管理器与操作系统平台密切绑定。&nbsp;<br />
<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhszkv2hyu0VCpMlB80ic6dXWXTX0Oo4UL2gZ7kuVfYNIQ0oE3yAdhFI8Q/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" /><br />
</span>
	</p>
	<p>
		<span>图 6. 解码器、渲染器和 DRM 工作流程图</span>
	</p>
	<p>
		<span><br />
</span>
	</p>
	<p>
		<strong><span>1. 解码器</span></strong><span><br />
<br />
解码器处理最底层播放相关的逻辑。它将不同封装格式的视频进行解包，并将其内容解码，然后将解码后的视频帧交给操作系统进行渲染，最终让终端用户看到。<br />
<br />
由于视频压缩算法变得越来越复杂，解码过程是一个需要密集计算的过程，并且为了保证解码性能和流畅的播放体验，解码过程需要强依赖于操作系统和硬件。现在的大部分解码都依赖于 GPU 加速解码的帮助（这也是为什么免费而更强大的 VP9 解码器没有赢得 H.264 市场地位的原因之一）。如果没有 GPU 的加速，解码一个 1080P 的视频就会占去 70% 左右的 CPU 计算量，并且丢帧率还可能很严重。</span>
	</p>
	<p>
		<span><br />
在解码和渲染视频帧的基础之上，管理器也提供了一个原生的 buffer，多媒体引擎可以直接与该 buffer 进行交互，实时了解它的大小并在必要的时候刷新它。</span>
	</p>
	<p>
		<span><br />
我们前面提到，每个平台都有它自己的渲染引擎和相应的 API：Flash 平台有 Netstream，Android 平台有 Media Codec API，而 Web 上则有标准的 Media Sources Extensions。MSE 越来越吸引眼球，将来可能会成为继浏览器之后其它平台上的事实标准。<br />
<br />
<strong>2. DRM 管理器</strong><br />
<br />
<img src="http://mmbiz.qpic.cn/mmbiz_png/v6uP0lGcBZ51q3O2ctf0sycDOh11eJhsGe7OmBicjHUAJ87iaoLVj2t6DGEoLvGSv2E6iazJAELH7DKjQicicbrw71Q/640?wx_fmt=png&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1" style="height:auto !important;width:auto !important;" /><br />
</span>
	</p>
	<p>
		<span>图 7. DRM 管理器</span>
	</p>
	<p>
		<span><br />
今天，在传输工作室生产的付费内容的时候，DRM 是必要的。这些内容必须防止被盗，因此 DRM 的代码和工作过程都向终端用户和开发者屏蔽了。解密过的内容不会离开解码层，因此也不会被拦截。<br />
<br />
为了标准化 DRM 以及为各平台的实现提供一定的互通性，几个 Web 巨头一起创建了通用加密标准</span><a><span>Common Encryption (CENC)</span></a><span>&nbsp;&nbsp;和通用的多媒体加密扩展</span><a><span>Encrypted Media Extensions</span></a><span>，以便为多个 DRM 提供商（例如，EME 可用于 Edge 平台上的 Playready 和 Chrome 平台上的 Widewine）构建一套通用的 API，这些 API 能够从 DRM 授权模块读取视频内容加密密钥用于解密。<br />
<br />
CENC 声明了一套标准的加密和密钥映射方法，它可用于在多个 DRM 系统上解密相同的内容，只需要提供相同的密钥即可。</span>
	</p>
	<p>
		<span><br />
在浏览器内部，基于视频内容的元信息，EME 可以通过识别它使用了哪个 DRM 系统加密，并调用相应的解密模块（Content Decryption Module, CDM）解密 CENC 加密过的内容。解密模块 CDM 则会去处理内容授权相关的工作，获得密钥并解密视频内容。<br />
<br />
CENC 没有规定授权的发放、授权的格式、授权的存储、以及使用规则和权限的映射关系等细节，这些细节的处理都由 DRM 提供商负责。&nbsp;<br />
</span>
	</p>
	<h2 style="font-weight:400;font-size:16px;color:#3E3E3E;font-family:&quot;background-color:#FFFFFF;">
		<span></span>
	</h2>
	<h2>
		四、总结
	</h2>
	<p>
		<span>今天我们深入了解了一下视频播放器三个层面的不同内容，这个现代播放器结构最优秀之处在于其交互部分完全和多媒体引擎逻辑部分分离，让主播可以无缝而自由灵活的定制终端用户体验，同时在多种不同终端设备上使用不同的多媒体引擎还能保证顺利播放多种不同格式的视频内容。<br />
<br />
在 Web 平台，得益于多媒体引擎如&nbsp;</span><span>dash.js</span><span>、</span><span>Shaka Player</span><span>&nbsp;和&nbsp;</span><span>hls.js</span><span>&nbsp;这些趋于成熟库的帮助， MSE 和 EME 正在成为播放的新标准，同时也越来越多有影响力的厂家使用这些播放引擎。近年来，注意力也开始伸向机顶盒和互联网电视，我们也看到越来越多这样的新设备使用 MSE 来作为其底层多媒体处理引擎。我们也将持续投入更多的力量去支持这些标准。&nbsp;</span>
	</p>
</span>
</p>
<p>
	<br />
</p>
<p>
	<span></span> 
</p>

            </div>
        </div>
    </div>
</div>
