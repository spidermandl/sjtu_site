<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 学院跟踪模块
 **/
class Controller_Students extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['STUDENTS'];
    }


}
