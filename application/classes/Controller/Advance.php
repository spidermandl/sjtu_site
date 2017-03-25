<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 软技能模块
 **/
class Controller_Advance extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['ADVANCE'];
    }

    /**
     * 请求列表
     */
    public function action_index()
    {
		parent::index_item();
    }

}
