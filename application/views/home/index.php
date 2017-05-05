<div class="container">
    <div class="homebox">
        <div class="cenbox">
            <div class="centop">
                <div class="panels_pane panel-pane pane-views pane-image-slide banner fl">
                    <div class="pane-content">
                        <div class="views_view view view-image-slide view-id-image_slide view-display-id-block_1 index-slide view-dom-id-3">
                            <div class="view-content">
                                <?php $index=0; ?>
                                <?php foreach($news as $n):?>
                                    <?php $index = $index+1;?>
                                    <div class="<?php echo $index%2==0?"frame even":($index==1?"frame first odd": "frame odd");?>">
                                        <div class="frame-image">
                                            <img class="imagefield imagefield-field_image" alt="" src="<?php e::url('/img/'.$n->flyer);?>" />
                                            <div class="title">
                                                <a href="<?php e::url("node/{$n->id}");?>"><?php echo $n->title; ?></a></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="frame first odd">
                                    <div class="frame-image">
                                        <img class="imagefield imagefield-field_image" width="604" height="312" alt="" src="http://www.physics.sjtu.edu.cn/sites/www.physics.sjtu.edu.cn/files/20170225.jpg?1488331212" />
                                        <div class="title">
                                            <a href="/news/2083">上海交通大学物理与天文学院召开院情报告会</a></div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-region-separator"></div>
                <div class="panels_pane panel-pane pane-views pane-news news fr">
                    <div class="pane-content">
                        <div class="views_view view view-news view-id-news view-display-id-block_1 view-dom-id-4">
                            <div class="view-header">
                                <h3 class="caption">
                                    <a href="<?php e::url(JT::category_string(JT::$CATEGORY['NEWS']));?>">+更多</a>
                                    <span>新闻
                                        <b>News</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <ul class="list01">
                                    <?php $index=0; ?>
                                    <?php foreach($news as $n):?>
                                        <?php $index = $index+1;?>
                                        <li class="<?php echo $index%2==0?"even":($index==1?"first odd": "odd");?>">
                                        <b><?php echo date("Y-m-d",strtotime($n->create_time)); ?></b>
                                        <a href= "<?php e::url("node/{$n->id}");?>">
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
                                    <a href="<?php e::url(JT::category_string(JT::$CATEGORY['UPDATES']).'/'.JT::$CATEGORY['NOTICE']);?>">+更多</a>
                                    <span>通知公告
                                        <b>Announcement</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <ul class="list02">
                                    <?php $index=0; ?>
                                    <?php foreach($notices as $n):?>
                                        <?php $index = $index+1;?>
                                        <li class="<?php echo $index%2==0?"even":($index==1?"first odd": "odd");?>">
                                            <p>
                                            <a href="<?php e::url("node/{$n->id}");?>"><?php echo ($n->title); ?></a>
                                            </p>
                                            <p><?php echo date("Y-m-d",strtotime($n->create_time)); ?></p>
                                        </li>
                                    <?php endforeach; ?>
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
                                    <a href="<?php e::url(JT::category_string(JT::$CATEGORY['UPDATES']).'/'.JT::$CATEGORY['SHARING']);?>"">+更多</a>
                                    <span>技术分享
                                        <b>Academic Events</b>
                                    </span>
                                </h3>
                            </div>
                            <div class="view-content">
                                <?php $index=0; ?>
                                <?php foreach($sharings as $n):?>
                                    <?php $index = $index+1;?>
                                    <dl class="<?php echo $index%2==0?"even":($index==1?"first odd": "odd");?>">
                                        <dt>
                                            <span class="<?php echo date("Y-m-d",strtotime($n->begin))==date("Y-m-d")? "today":"";?>"><?php echo date("Y-m",strtotime($n->begin)); ?></span>
                                            <div>
                                                <b><?php echo date("d",strtotime($n->begin)); ?></b>
                                                <p><?php echo JT::getChineseWeekName(date("w",strtotime($n->begin))); ?></p>
                                            </div>
                                        </dt>
                                        <dd>
                                            <h3>
                                                <a href="<?php e::url("node/{$n->id}");?>"><?php echo ($n->title); ?></a></h3>
                                            <p>
                                                <b>报告人:</b><?php echo ($n->author); ?></p>
                                            <p>
                                                <b>时&#x3000;间:</b>
                                                <span class="date-display-single">
                                                    <span class="date-display-start"><?php echo date("H:i",strtotime($n->begin)); ?></span>
                                                    <span class="date-display-separator">-</span>
                                                    <span class="date-display-end"><?php echo date("H:i",strtotime($n->begin)+$n->duration*60); ?></span></span>
                                            </p>
                                            <p>
                                                <b>地&#x3000;点:</b><?php echo ($n->location); ?></p>
                                        </dd>
                                    </dl>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- /.view --></div>
                </div>
                <div class="panel-region-separator"></div>
                <div class="panels_pane panel-pane pane-block pane-block-25">
                    <div class="pane-content">
                        <div class="menu01 fr">
                            <a class="link1" href=""></a>
                            <a class="link2" href=""></a>
                            <a class="link3" href=""></a>
                            <a class="link4" href=""></a>
                            <a class="link5" href="<?php e::url("/img/qrcode_for_gh_8d2180b9c7da_430.jpg");?>" data-lightbox="weixin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>