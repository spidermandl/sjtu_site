<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 联系方式板块
 **/
class Controller_Contacts extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['CONTACTS'];
    }


}
