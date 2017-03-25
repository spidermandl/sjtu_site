<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 培养模式模块
 **/
class Controller_Training extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['TRAINING'];
    }

    /**
     * 请求列表
     */
    public function action_index()
    {
    	parent::index_item();
    }

}
