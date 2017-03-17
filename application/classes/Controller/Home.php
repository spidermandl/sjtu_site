<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base
{

    public function action_index()
    {
        $category=JT::$CATEGORY['NEWS'];
        //第一页 每页6条信息
        $latest_news = Model_Content::find_by_parent_category(1,6,$category);
        $this->template_data['news'] = $latest_news;
        //var_dump($latest_news);
    }

}
