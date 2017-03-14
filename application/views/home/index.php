<div class="container">
    <div class="homebox">
        <div class="cenbox">
            <div class="centop">
                <div class="panels_pane panel-pane pane-views pane-image-slide banner fl">
                    <div class="pane-content">
                        <div class="views_view view view-image-slide view-id-image_slide view-display-id-block_1 index-slide view-dom-id-3">
                            <div class="view-content">
                                <div class="frame first odd">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20170225.jpg?1488331212" />
                                        <div class="title">
                                            <a href="/news/2083">上海交通大学物理与天文学院召开院情报告会</a></div>
                                    </div>
                                </div>
                                <div class="frame even">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20170221.jpg?1487661450" />
                                        <div class="title">
                                            <a href="/news/2080">物理与天文学院两项科研成果入选《科技导报》2016年度中国十大科学进展</a></div>
                                    </div>
                                </div>
                                <div class="frame odd">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20170214.png?1487065009" />
                                        <div class="title">
                                            <a href="/news/2074">PandaX-II暗物质实验的自旋相关测量结果取得世界领先水平</a></div>
                                    </div>
                                </div>
                                <div class="frame even">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20161216.png?1481871810" />
                                        <div class="title">
                                            <a href="/node/2055">物理与天文系举行2016年奖学金颁奖典礼</a></div>
                                    </div>
                                </div>
                                <div class="frame last odd">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20161031.png?1477904299" />
                                        <div class="title">
                                            <a href="/node/2026">纳米孪晶面金刚石超强硬度机制探究</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.view --></div>
                </div>
                <div class="panel-region-separator"></div>
                <div class="panels_pane panel-pane pane-views pane-news news fr">
                    <div class="pane-content">
                        <div class="views_view view view-news view-id-news view-display-id-block_1 view-dom-id-4">
                            <div class="view-header">
                                <h3 class="caption">
                                    <a href="/news/68">+更多</a>
                                    <span>新闻
                                        <b>News</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <ul class="list01">
                                    <?php $even=0; ?>
                                    <?php foreach($news as $n):?>
                                        <?php $even = $even+1;?>
                                        <li class="<?php echo $even%2==0?"even":($even==1?"first odd": "odd");?>">
                                        <b><?php echo date("Y-m-d",strtotime($n->create_time)); ?></b>
                                        <a href= "<?php e::url("news/{$n->id}");?>">
                                        <?php echo ($n->title); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cenbottom">
                <div class="panels_pane panel-pane pane-views-panes pane-notice-panel-pane-2 tongzhi fl">
                    <div class="pane-content">
                        <div class="views_view view view-Notice view-id-Notice view-display-id-panel_pane_2 view-dom-id-1">
                            <div class="view-header">
                                <h3 class="title">
                                    <a href="/notices">+更多</a>
                                    <span>通知公告
                                        <b>Announcement</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <ul class="list02">
                                    <li class="first odd">
                                        <p>
                                            <a href="/node/2018">物理与天文系2017年博士招生（硕博连读、申请考核、普通招考）报名通知</a></p>
                                        <p>2016-10-12</p>
                                    </li>
                                    <li class="even">
                                        <p>
                                            <a href="/node/2020">上海交通大学物理与天文系2017年推荐免试研究生选拔结果公示</a></p>
                                        <p>2016-12-07</p>
                                    </li>
                                    <li class="odd">
                                        <p>
                                            <a href="/node/2012">物理与天文系2016年研究生国家奖学金评审结果公示</a></p>
                                        <p>2016-10-09</p>
                                    </li>
                                    <li class="last even">
                                        <p>
                                            <a href="/node/1990">物理与天文系2017年推荐免试研究生选拔办法</a></p>
                                        <p>2016-09-14</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.view --></div>
                </div>
                <div class="panel-region-separator"></div>
                <div class="panels_pane panel-pane pane-views-panes pane-event-list-on-index-panel-pane-1 xueshu fl">
                    <div class="pane-content">
                        <div class="views_view view view-event-list-on-index view-id-event_list_on_index view-display-id-panel_pane_1 list03 events-list-upcoming view-dom-id-2">
                            <div class="view-header">
                                <h3 class="title">
                                    <a href="/events">+更多</a>
                                    <span>学术活动
                                        <b>Academic Events</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <dl class="first odd">
                                    <dt>
                                        <span class="today">2017-03</span>
                                        <div>
                                            <b>08</b>
                                            <p>周三</p>
                                        </div>
                                    </dt>
                                    <dd>
                                        <h3>
                                            <b>
                                                <a href="/events/1" class="event-category-link">[Colloquium]</a></b>
                                            <a href="/node/2076">新元素和新核素研究评述</a></h3>
                                        <p>
                                            <b>报告人:</b>任中洲，教授，南京大学</p>
                                        <p>
                                            <b>时&#x3000;间:</b>
                                            <span class="date-display-single">
                                                <span class="date-display-start">15:00</span>
                                                <span class="date-display-separator">-</span>
                                                <span class="date-display-end">16:00</span></span>
                                        </p>
                                        <p>
                                            <b>地&#x3000;点:</b>物理楼1楼报告厅</p>
                                    </dd>
                                </dl>
                                <dl class="even">
                                    <dt>
                                        <span class="">2017-06</span>
                                        <div>
                                            <b>13</b>
                                            <p>周二</p>
                                        </div>
                                    </dt>
                                    <dd>
                                        <h3>
                                            <b>
                                                <a href="/events/71" class="event-category-link">[Conferences]</a></b>
                                            <a href="/node/2077">2017 International Workshop:Topological matter meets quantum information</a></h3>
                                        <p>
                                            <b>报告人:</b>Physicists</p>
                                        <p>
                                            <b>时&#x3000;间:</b>
                                            <span class="date-display-single">
                                                <span class="date-display-start">8:45</span>
                                                <span class="date-display-separator">-</span>
                                                <span class="date-display-end">18:00</span></span>
                                        </p>
                                        <p>
                                            <b>地&#x3000;点:</b>Xuhui Campus, Shanghai Jiao Tong University</p>
                                    </dd>
                                </dl>
                                <dl class="last odd">
                                    <dt>
                                        <span class="">2017-09</span>
                                        <div>
                                            <b>10</b>
                                            <p>周日</p>
                                        </div>
                                    </dt>
                                    <dd>
                                        <h3>
                                            <b>
                                                <a href="/events/1" class="event-category-link">[Colloquium]</a></b>
                                            <a href="/node/1391">SCHEDULE (2017.03-2017.06)</a></h3>
                                        <p>
                                            <b>报告人:</b>Physicists</p>
                                        <p>
                                            <b>时&#x3000;间:</b>
                                            <span class="date-display-single">
                                                <span class="date-display-start">15:00</span>
                                                <span class="date-display-separator">-</span>
                                                <span class="date-display-end">16:00</span></span>
                                        </p>
                                        <p>
                                            <b>地&#x3000;点:</b>物理楼111报告厅</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!-- /.view --></div>
                </div>
                <div class="panel-region-separator"></div>
                <div class="panels_pane panel-pane pane-block pane-block-25">
                    <div class="pane-content">
                        <div class="menu01 fr">
                            <a class="link1" href="http://www.physics.sjtu.edu.cn/node/1468"></a>
                            <a class="link2" href="/node/494"></a>
                            <a class="link3" href=""></a>
                            <a class="link4" href="/meetingroom"></a>
                            <a class="link5" href="sites/www.physics.sjtu.edu.cn/themes/phytheme/phy-weixin.jpg" data-lightbox="weixin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>