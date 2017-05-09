<?php defined('SYSPATH') or die('No direct script access.');

/**
 * updates 板块
 */
class Controller_Updates extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	return JT::$CATEGORY['UPDATES'];
    }

}
