<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>视频直播技术分析 七 （直播云 SDK 性能测试模型）</h2>
				<br/>	

		<p>
			<span>影响视频质量和大小的重要参数</span>
		</p>
		<p>
			<span>在进行测试之前我们需要明确几个对视频的质量和大小影响最大的参数：帧率、码率和分辨率。
			<br />
			<strong>1）如何制定帧率</strong></span>
		</p>
		<p>
			<span>一帧就是一副静止的画面，连续的帧就形成动画，如电视图象等。我们通常说帧数，简单地说，就是在1秒钟时间里传输的图片的数，也可以理解为图形处理器每秒钟能够刷新几次，通常用 fps（Frames Per Second）表示。每一帧都是静止的图象，快速连续地显示帧便形成了运动的假象。高的帧率可以得到更流畅、更逼真的动画。每秒钟帧数(fps)愈多，所显示的动作就会愈流畅。
			<br />
			<strong>2）如何制定码率</strong></span>
		</p>
		<p>
			<span>我们首先看视频编码的目的，它是为了在有限的带宽中传输尽可能清晰的视频，我们以每秒25帧的图像举例，25帧图像中定义了GOP组，目前主要是有I，B，P帧三种帧格式，I帧是关键帧，你可以想象它就是一幅JPEG压缩图像，而B，P帧是依靠I帧存在的，如果丢失了I帧，B，P帧是看不到图像的，B，P帧描述的不是实际的图像像素内容，而是每个相关像素的变化量，他们相对于I帧信息量会很小。GOP组是指一个关键帧I帧所在的组的长度，每个GOP组只有1个I帧。
			<br />
			我们再来看，一组画面的码流大小跟什么有关？当视频编码的压缩方式都一样，清晰度要求都一样的时候，GOP组的长度格式决定了码流的大小，例如：每秒25帧画面，GOP组长度为5，那么帧格式为IBPBP,那么1秒钟有5个I帧，10个B帧，10个P帧，如果GOP组长度为 15，帧格式就是IBBPBBPBBPBBPBB，那么1秒钟内会有2个I帧和16个B帧和7个P帧，那么5个I帧比2个I帧占用的数据信息量大，所以 GOP 组的长度格式也决定了码流的大小。
			<br />
			<strong>3）如何指定分辨率</strong></span>
		</p>
		<p>
			<span>分辨率概念视频分辨率是指视频成像产品所成图像的大小或尺寸。常见的视像分辨率有 640×480，1088×720，1920×1088。在成像的两组数字中，前者为图片长度，后者为图片的宽度，两者相乘得出的是图片的像素。</span>
		</p>
		<br />

		<p>
			<span>影响SDK性能的指标</span>
		</p>
		<p>
			<span>有了上述的前置知识，我们可以开始准备测试 SDK 的性能了，我们首先分析一下都有哪些指标可以反映 SDK 的性能，分成 Android 和 iOS 两个平台：
			<br />
			Android<br />
			</span>
		</p>

		<p>
			<span>GC ：可以通过 GC 日志记录，Mirror GC 和 Full GC 的频次和时间，Full GC 会造成比较明显的卡顿，需要评估</span>
		</p>

		<p>
			<span>UI Loop 就是 VSync Loop ：反映 SDK 对 App 流畅度的影响，理论上 60 fps 是最流畅的值。</span>
		</p>

		<p>
			<span>Memory ：反映 SDK 占用内存的大小</span>
		</p>

		<p>
			<span>CPU Usage ：反映 SDK 占用计算资源的大小</span>
		</p>
		<br />

		<p>
			<span>iOS<br />
			</span>
		</p>

		<p>
			<span>UI Loop ：反映 SDK 对 App 流畅度的影响，理论上 60 fps 是最流畅的值。</span>
		</p>

		<p>
			<span>Memory ：反映 SDK 占用内存的大小</span>
		</p>

		<p>
			<span>CPU Usage ：反映 SDK 占用计算资源的大小</span>
		</p>
		<br />

		<p>
			<span>除了上面的一些系统级别的指标外，下面是直播SDK中特有的一些指标，这些指标可以反映出SDK的核心竞争力和一些主要的差异，涉及到视频的清晰度和流畅度，也是可以量化的。
			<br />
			<strong>1)影响视频清晰度的指标</strong></span>
		</p>

			<p>
				<span>帧率</span>
			</p>

			<p>
				<span>码率</span>
			</p>

			<p>
				<span>分辨率</span>
			</p>

			<p>
				<span>量化参数（压缩比）</span>
			</p>
			<br />

	<p>
		<strong><span>2）影响视频流畅度的指标</span></strong>
	</p>

			<p>
				<span>码率</span>
			</p>

			<p>
				<span>帧率</span>
			</p>
			<br />

	<p>
		<span><strong>3）其他重要指标</strong></span>
	</p>
	<p>
		<span>直播是流量和性能的消耗大户，有一些指标，直接影响了用户的感受，也是我们需要重点关注的：<br />
		</span>
	</p>

			<p>
				<span>耗电量</span>
			</p>

			<p>
				<span>发热（不好量化，大部分情况发热和耗电量正比，可以使用耗电量暂时替代）</span>
			</p>

	<p>
		<strong><span>测试计划</span></strong>
	</p>
	<p>
		<span>测试过程需要先固化一些测试条件，然后根据不同的测试条件得出测试结果，这里选择了两个现在最常见的条件，是我们通过回访大量的客户得出的一些统计数字，可以反映大部分直播应用所处的场景。主要从分辨率、视频处理、码率和网络环境几个维度进行限制。</span>
	</p>
	<p>
		<span><br />
			最后分为几个两种测试指标：客观和主观指标，前者反映了 SDK 对系统的消耗程度，但虽说是客观指标并不是说对用户没有影响、只是说得出的结果用户感受不明显。主观指标则会直接影响最终用户体验，但在传统的测试中反而容易被忽略，因为不好量化，这里拍砖引玉的提出一些量化的方式，希望引起读者的思考。
			<br />
		测试条件 A<br />
		</span>
	</p>
			<p>
				<span>分辨率 480p</span>
			</p>

			<p>
				<span>无水印，无美颜</span>
			</p>

			<p>
				<span>码率 1 M</span>
			</p>

			<p>
				<span>网络保证在 0.5 M ~ 2 M</span>
			</p>

	<p>
		<span>这个条件，反映了大部分低速网络情况下的使用场景，也反映了SDK基本的性能情况，可以作为SDK基本推流和拉流情况下的基准测试，不引入太多的测试依赖。&nbsp;<br />
		<br />
		测试条件 B<br />
		</span>
	</p>

			<p>
				<span>分辨率 720p</span>
			</p>

			<p>
				<span>无水印，有美颜</span>
			</p>

			<p>
				<span>码率 1 M</span>
			</p>

			<p>
				<span>网络保证在 0.5 M ~ 2 M</span>
			</p>

	<p>
		<span>这个条件，反映了大部分客户的使用场景，具有较高的分辨率和美颜视频处理，可以作为SDK竞品分析的重要依据，测试结果非常接近真实场景。
		<br />
		<strong>1）客观指标测试计划</strong><br />
		客观影响 App 稳定性和性能的指标：<br />
		</span>
	</p>

			<p>
				<span>Memory</span>
			</p>

			<p>
				<span>测试 10 分钟，内存曲线</span>
			</p>

			<p>
				<span>测试 1 小时，TP99，TP95，TP90，需要归档</span>
			</p>

			<p>
				<span>测试 1 小时，内存增量，考察是否有内存泄露，需要归档</span>
			</p>

			<p>
				<span>参考值：上次结果</span>
			</p>

			<p>
				<span>CPU</span>
			</p>

			<p>
				<span>测试 10 分钟，CPU Usage 曲线</span>
			</p>

			<p>
				<span>测试 10 分钟，TP99，TP95，TP90，需要归档</span>
			</p>

			<p>
				<span>参考值：上次结果</span>
			</p>

			<p>
				<span>码率</span>
			</p>

			<p>
				<span>测试 10 分钟，TP99，TP95，TP90，重点说明，这里的码率控制需要分开来看，如果网络抖动造成码率降低，这样的点不计入进来，只测试 SDK 码率控制，需要归档</span>
			</p>

			<p>
				<span>参考值：1 M（大小都是偏差）</span>
			</p>

			<p>
				<span>耗电量</span>
			</p>

			<p>
				<span>测试一小时，记录进程总耗电量、屏幕显示耗电量、CPU 耗电量，需要归档</span>
			</p>

			<p>
				<span>参考值：上次结果</span>
			</p>
			<br />

		<p>
			<strong><span>2）主观指标测试计划</span></strong><span><br />
			主观影响 App 使用者的指标：<br />
			</span>
		</p>

			<p>
				<span>UI Loop App 本身可以达到的最大帧率，不同于视频帧率，统计他的原因是我们的 SDK 可能会影响整个 App 的流畅度，需要跟踪</span>
			</p>

			<p>
				<span>测试 10 分钟，UI Loop 曲线</span>
			</p>

			<p>
				<span>测试 10 分钟，UI Loop TP99，TP95，TP90，需要归档反复比较</span>
			</p>

			<p>
				<span>参考值：60 fps</span>
			</p>

			<p>
				<span>Android GC</span>
			</p>

			<p>
				<span>测试 1 小时，记录 Mirror GC 和 Full GC 的频次，记录 GC 时长的 TP99，TP95，TP90，需要归档反复比较</span>
			</p>

			<p>
				<span>参考值：上次结果</span>
			</p>
			<p>
				<span>帧率（fps）</span>
			</p>
			<p>
				<span>测试 10 分钟，TP99，TP95，TP90，需要归档反复比较</span>
			</p>
			<p>
				<span>参考值：30 fps</span>
			</p>
			<p>
				<span>PSNR 比较视频清晰度的指标</span>
			</p>
			<p>
				<span>测试 10 分钟，需要归档反复比较，这个指标可以使用固定视频作为输入。</span>
			</p>
			<p>
				<span>参考值：上次结果</span>
			</p>
			<br />
	<p>
		<strong><span>3）结果显示</span></strong>
	</p>
			<p>
				<span>表格显示具体指标</span>
			</p>
			<p>
				<span>曲线显示原始数据和时间轴的数据</span>
			</p>
			<p>
				<span>热图显示和参考值的偏差</span>
			</p>
			<p>
				<span>热图显示距离上次归档值是改善了还是恶化了</span>
			</p><br />

	            </div>
        </div>
    </div>
</div>