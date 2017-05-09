<div class="pane-content">
    <div class="views_view view view-node-body-with-title view-id-node_body_with_title view-display-id-panel_pane_1 view-dom-id-1">
        <div class="view-content">
            <div class="first last odd">
                <h2>Linux/Window下Apache配置多个站点</h2>

<p>
    <p>
        Apache要想实现类似的功能，其实也挺容易的，本篇文章以Windows环境下为例，Linux下的配置也大同小异。
    </p>
    <p>
        打开httpd.conf，找到 Include conf/extra/httpd-vhosts.conf，去掉前面的#。然后打开\conf\extra\httpd-vhosts.conf
    </p>
    <p>
        如果你的Apache端口像我一样，配置为90的话，NameVirtualHost *:90&nbsp;
    </p>
    <br />
    <p>
        &lt;VirtualHost *:90&gt;<br />
&nbsp;&nbsp;&nbsp; ServerAdmin webmaster@linuxidc.com<br />
&nbsp;&nbsp;&nbsp; DocumentRoot "E:\my b-s\php\phptest"<br />
&nbsp;&nbsp;&nbsp; ServerName www.linuxidc.com<br />
&lt;/VirtualHost&gt;
    </p>
    <p>
        &lt;VirtualHost *:90&gt;<br />
&nbsp;&nbsp;&nbsp; ServerAdmin webmaste2r@idcfree.com<br />
&nbsp;&nbsp;&nbsp; DocumentRoot "E:\my b-s\php\zend_test"<br />
&nbsp;&nbsp;&nbsp; ServerName www.6688.cc<br />
&lt;/VirtualHost&gt;
    </p>
    <br />
    <p>
        这样，通过www.linuxidc.com与www.idcfree.com访问就是两个项目了，注意：在httpd.conf中配置的documentRoot,假如你配置为E:\my b-s\,则还需要在NameVirtualHost *:90 这行代码下面，新增一个虚拟主机，
    </p>
    <br />
    <p>
        &lt;VirtualHost *:90&gt;<br />
&nbsp;&nbsp;&nbsp; ServerAdmin webmaster@linuxidc.com<br />
&nbsp;&nbsp;&nbsp; DocumentRoot "E:\my b-s\"<br />
&nbsp;&nbsp;&nbsp; ServerName www.linuxidc.net<br />
&lt;/VirtualHost&gt;
    </p>
    <p>
        可能有的apache版本并没有ext目录，如果那样的话，则把&lt;VirtualHost *:90&gt;配置全部写在httpd.conf中即可。
    </p>
</span>
</p>
<br />


             </div>
        </div>
    </div>
</div>