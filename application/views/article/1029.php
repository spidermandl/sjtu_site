<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>Apache配置多个监听端口和不同的网站目录</h2>
				<p>
					由于开发的多项目，每个项目又要独立，要用根目录地址。所以这时候我们需要配置多个不同目录的Apache，如果是外部网可能用多个域名，可以虚拟主机的方式配置；但本地的开发环境就一个地址或者就是localhost那就要配置多个端口来区别不同的目录。一个配置文件可以设置Apache监听多个端口；
				</p>
				<p>
					<br />
				</p>
				<p>
					下面是显示方法：打开Apache的配置文件httpd.conf
				</p>
				<p>
				<br />
				</p>
				<p>
					在Listen 80 下面添加多个监听端口如
				</p>
				<p>
					Listen 8011<br />
					Listen 8088<br />
				</p>
				<p>
					这样就增加了8011和8088端口的监听,然后在最后的位置设置虚拟主机目录
				</p>
				<p>
					NameVirtualHost *:80<br />
					< VirtualHost *:80 ><br />
					ServerName localhost<br />
					DocumentRoot “E:/web1″<br />
					< /VirtualHost>
				</p>
				<br />
				<p>
					NameVirtualHost *:8011<br />
					< VirtualHost *:8011 ><br />
					ServerName localhost:8011<br />
					DocumentRoot “E:/web2″<br />
					< /VirtualHost >
				</p>
				<br />
				</p>
					NameVirtualHost *:8088<br />
					< VirtualHost *:8088 ><br />
					ServerName localhost:8088<br />
					DocumentRoot “E:/web3″<br />
					< /VirtualHost >
				</p>
				<br />
				<p>
					像这样，重启Apache服务，即可以用
				</p>
				localhost<br />
				localhost:8011<br />
				localhost:8088<br />
				访问你不同的网站了<br />

             </div>
        </div>
    </div>
</div>
