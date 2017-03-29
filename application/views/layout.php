<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>上海交通大学信息技术研究中心</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php echo View::factory('util/meta');?>
        <script type="text/javascript">
            jQuery.extend(Drupal.settings, {
                "basePath": "/",
                "no_colons": {
                    "no_colons_mode": "all_colons",
                    "no_colons_use_cck_jquery": {
                        "cck_jquery": 0
                    },
                    "no_colons_use_views_jquery": {
                        "views_jquery": "views_jquery"
                    }
                }
            });
        </script>

    </head>
    
    <body>
        <div class="headerbox">
            <div class="homebox">
                <div class="header">
                    <div class="logo fl"></div>
<!--                     <div class="menus fr">
                        <a href="//www.physics.sjtu.edu.cn/en">English</a></div> -->
                </div>
            </div>
        </div>
        <div class="navbox">
            <div class="homebox">
                <div class="navs">
                    <ul class="menu">
                        <li class="leaf first">
                            <a href="<?php e::url('');?>"  title="" class="active">首页</a></li>
                        <li class="expanded">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['TRAINING']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>

                        </li>
                        <li class="expanded">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['AREAS']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="expanded">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['ORGANIZATION']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="expanded">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['ADVANCE']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="expanded">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['STUDENTS']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="expanded">

                        </li>
                        <li class="expanded last">
                            <?php $lead = JT::get_lead_templates(JT::$CATEGORY['CONTACTS']) ?>
                            <a href="<?php e::url(JT::category_string($lead->id));?>" title=""><?php echo $lead->name?></a>
                            <ul class="menu">
                                <?php $children = JT::get_sub_templates($lead->id) ?>
                                <?php $index=0; ?>
                                <?php foreach($children as $child):?>
                                    <?php $index = $index+1;
                                          $style = $index==1?'leaf first':$index==count($children)?'leaf last':'leaf';?>
                                    <li class="<?php echo $style;?>">
                                        <a href="<?php e::url(JT::category_string($lead->id).'/'.$child->id);?>" title=""><?php echo $child->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <script type="text/javascript">(function($) {
                            $(function() {
                                $(".navs li.expanded").mouseenter(function() {
                                    $(this).find("ul").addClass("visible");
                                });
                                $(".navs li.expanded").mouseleave(function() {
                                    $(this).find("ul").removeClass("visible");
                                })
                            });
                        })(jQuery);</script>
                    <!-- <div class="search fr"> -->
                    <!-- <input type="text" class="text01" />-->
                    <!-- <input type="button" class="text02" />-->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <?php echo($body); ?>
        <div class="footer">
            <p>© 上海交通大学卓越软件工程 版权所有</p>
            <p>沪交ICP备05010 地址：法华镇路535号 主楼 邮编：200030</p>
        </div>
    </body>

</html>