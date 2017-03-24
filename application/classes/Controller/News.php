<?php defined('SYSPATH') or die('No direct script access.');

/**
 * news 板块
 */
class Controller_News extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['NEWS'];
    }

}
