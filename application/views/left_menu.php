<div class="left fl">
    <div class="panels_pane panel-pane pane-views-panes pane-news-category-panel-pane-1 left_menu">
        <h3 class="pane-title"><?php echo $parent->name ?></h3>
        <div class="pane-content">
            <div class="views_view view view-news-category view-id-news_category view-display-id-panel_pane_1 menu-block-1 view-dom-id-2">
                <div class="view-content">
                    <div class="item-list">
                        <ul>
                            <?php $index=0; ?>
                            <?php foreach($children as $child):?>
                                <?php $index = $index+1; 
                                    $views_row_index = 'views-row-'.$index;
                                    $even = $index%2==0?'views-row-even':'views-row-odd';
                                    $bound = $index==1?'views-row-first':($index==count($children)?'views-row-last':'');
                                    $selected = $template_id == $child->id?True:False; ?>
                                <li class="views-row <?php echo $views_row_index.' '.$even.' '.$bound ?>">
                                    <div class="views-field-name">
                                        <span class="field-content">
                                            <a href="<?php e::url("news/{$child->id}");?>" 
                                                class="<?php if($selected) echo 'active'; ?>">
                                                <?php echo ($child->name); ?>
                                            </a>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>