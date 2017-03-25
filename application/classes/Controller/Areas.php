<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 技术专项模块
 **/
class Controller_Areas extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['AREAS'];
    }

    /**
     * 请求列表
     */
    public function action_index()
    {
        parent::index_item();
    }

}
