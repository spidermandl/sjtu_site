<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 单篇文章
 */
class Controller_Node extends Controller_SubBase
{

    protected function getParentTemplateId(){
    	if (!array_key_exists("child",$this->template_data)) {
	        $content_id = $this->request->param('id', null);//参数是article id
	        $this->article = Model_Content::find_by_id($content_id);
	        $this->template_data['template_id'] = $this->article->template_id;
	        $child = Model_Template::find_by_id($this->article->template_id);
	        $this->template_data['child'] = $child;
    	}

    	return $this->template_data['child']->parent_id;
    }
}
