<?php defined('SYSPATH') or die('No direct script access.');

/**
*
**/
class Controller_Home extends Controller_Base
{

    public function action_index()
    {
        $category=JT::$CATEGORY['NEWS'];
        //第一页 每页6条信息
        $latest_news = //Model_Content::find_by_parent_category(1,6,$category);//所有新闻
        			Model_Content::find_by_child_category(1,6,JT::$CATEGORY['CENTER_NEWS']);//中心新闻
       	$latest_notice = 
       				Model_Content::find_by_child_category(1,4,JT::$CATEGORY['NOTICE']);//通知
       	$latest_sharing = 
       				Model_Content::find_by_child_category(1,3,JT::$CATEGORY['SHARING']);//技术分享
        $this->template_data['news'] = $latest_news;
        $this->template_data['notices'] = $latest_notice;
		$this->template_data['sharings'] = $latest_sharing;
        //var_dump($latest_news);
    }

}
