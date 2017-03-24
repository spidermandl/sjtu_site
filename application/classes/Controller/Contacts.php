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
    	parent::set_menu();
        $template_id = $this->request->param('tid', NULL);
    	$child = $template_id==NULL?$this->template_data['children'][0]:Model_Template::find_by_id($template_id);
    	$template_id = $child->id;

        $this->article = //Model_Content::find_by_id($content_id);
	        Model_Content::find(
	        		array('template_id' =>$template_id,),
	        		NULL,NULL,
	        		array('create_time' => Model_Base::ORDER_DESC,))[0];
        $this->page = View::factory('article/'.$this->article->link,$this->template_data);
        /**
         * 模板数据
         **/
        $this->template_data['template_id'] = $template_id;
        $this->template_data['child'] = $child;
    }

}
