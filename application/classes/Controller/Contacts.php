<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 联系方式板块
 **/
class Controller_Contacts extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['CONTACTS'];
    }

    /**
     * 请求列表
     */
    public function action_index()
    {
    	parent::index_item();
    }

}
