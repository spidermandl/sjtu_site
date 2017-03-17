<div class="homebox">
    <div class="conbox">
        <?php echo($menu); ?>
          <div class="right fr">
            <div class="panels_pane panel-pane pane-views-panes pane-news-panel-pane-1 right_nr">
                <h3 class="pane-title"><?php echo $child->name;?></h3>
                <div class="pane-content">
                    <div class="views_view view view-news view-id-news view-display-id-panel_pane_1 xingfa-nr view-dom-id-1">
                      <div class="view-content">
                          <ul>
                              <?php $index=0; ?>
                              <?php foreach($articles as $a):?>
                                  <?php $index = $index+1;?>
                                  <li class="row <?php echo $index%2==0?"even":($index==1?"first odd": "odd");?>">
                                  <span><?php echo date("Y-m-d",strtotime($a->create_time)); ?></span>
                                  <a href= "<?php e::url("node/{$a->id}");?>">
                                  <?php echo ($a->title); ?></a></li>
                              <?php endforeach; ?>
                          </ul>
                      </div>
                      <div class="item-list">
                          <ul class="pager">
                              <?php for($i = $start; $i <= $end; $i++): ?>

                                  <?php if ($i == $start):?>
                                      <?php if ($start == $current_page):?>
                                          <li class="pager-current first">1</li>
                                      <?php else:?>
                                          <li class="pager-first first">
                                              <a href="<?php e::url('news/'.$template_id);?>" title="Go to first page" class="active">« first</a>
                                          </li>
                                          <li class="pager-previous">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.($current_page-1));?>" title="Go to previous page" class="active">‹ previous</a>
                                          </li>
                                          <?php if ($start != 1):?>
                                              <li class="pager-ellipsis">…</li>
                                          <?php endif;?>
                                          <li class="pager-item">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.$i);?>" title="Go to page <?php echo ($i);?>" class="active"><?php echo ($i);?></a></li>
                                      <?php endif;?>

                                  <?php endif;?>

                                  <?php if ($i > $start && $i<$end):?>
                                      <?php if ($i == $current_page):?>
                                          <li class="pager-current"><?php echo $i;?></li>
                                      <?php else:?>
                                          <li class="pager-item">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.$i);?>" title="Go to page <?php echo ($i);?>" class="active"><?php echo ($i);?></a></li>
                                      <?php endif;?>
                                  <?php endif;?>

                                  <?php if ($i == $end && $i!=1):?>
                                      <?php if ($count == $current_page):?>
                                          <li class="pager-current last"><?php echo $count;?></li>
                                      <?php else:?>
                                          <li class="pager-item">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.$i);?>" title="Go to page <?php echo ($i);?>" class="active"><?php echo ($i);?></a></li>
                                          <?php if ($end != $count):?>
                                              <li class="pager-ellipsis">…</li>
                                          <?php endif;?>
                                          <li class="pager-next">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.($current_page+1));?>" title="Go to next page" class="active">next ›</a></li>
                                          <li class="pager-last last">
                                              <a href="<?php e::url('news/'.$template_id.'/page/'.($count));?>"  title="Go to last page" class="active">last »</a></li>
                                      <?php endif;?>

                                  <?php endif;?>

                              <?php endfor;?>
                          </ul>


                          <!-- <ul class="pager">
                              <li class="pager-current first">1</li>
                              <li class="pager-item">
                                  <a href="/news/68?page=1" title="Go to page 2" class="active">2</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=2" title="Go to page 3" class="active">3</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=3" title="Go to page 4" class="active">4</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=4" title="Go to page 5" class="active">5</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=5" title="Go to page 6" class="active">6</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=6" title="Go to page 7" class="active">7</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=7" title="Go to page 8" class="active">8</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=8" title="Go to page 9" class="active">9</a></li>
                              <li class="pager-ellipsis">…</li>
                              <li class="pager-next">
                                  <a href="/news/68?page=1" title="Go to next page" class="active">next ›</a></li>
                              <li class="pager-last last">
                                  <a href="/news/68?page=14" title="Go to last page" class="active">last »</a></li>
                          </ul>

                          <ul class="pager">
                              <li class="pager-first first">
                                  <a href="/news/68" title="Go to first page" class="active">« first</a></li>
                              <li class="pager-previous">
                                  <a href="/news/68?page=3" title="Go to previous page" class="active">‹ previous</a></li>
                              <li class="pager-item">
                                  <a href="/news/68" title="Go to page 1" class="active">1</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=1" title="Go to page 2" class="active">2</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=2" title="Go to page 3" class="active">3</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=3" title="Go to page 4" class="active">4</a></li>
                              <li class="pager-current">5</li>
                              <li class="pager-item">
                                  <a href="/news/68?page=5" title="Go to page 6" class="active">6</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=6" title="Go to page 7" class="active">7</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=7" title="Go to page 8" class="active">8</a></li>
                              <li class="pager-item">
                                  <a href="/news/68?page=8" title="Go to page 9" class="active">9</a></li>
                              <li class="pager-ellipsis">…</li>
                              <li class="pager-next">
                                  <a href="/news/68?page=5" title="Go to next page" class="active">next ›</a></li>
                              <li class="pager-last last">
                                  <a href="/news/68?page=14" title="Go to last page" class="active">last »</a></li>
                          </ul> -->

                      </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>