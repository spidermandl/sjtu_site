<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 纯文章页面模板
 **/
abstract class Controller_SubBase extends Controller_Base
{
    protected $left_menu = 'left_menu';//左菜单

	/**
	 * 父模板id
	 */
	abstract protected function getParentTemplateId();

    /**
     * 设置菜单内容
     */
    protected function set_menu(){
        $parent = Model_Template::find_by_id($this->getParentTemplateId());
        $this->template_data['parent'] = $parent;
        $children = Model_Template::find(array('parent_id' => $this->getParentTemplateId()));
        $this->template_data['children'] = $children;
        $content = Model_Content::find_by_id($this->request->param('id', null));
        $this->template_data['content'] = $content;
    }


    public function action_index()
    {
    	$this->set_menu();
    }


    public function after()
    {
        if ( ! $this->response->body())
        {
            $layout = View::factory($this->layout, $this->template_data);//将数据绑到模板上
            $menu = View::factory($this->left_menu,$this->template_data);

            $body = View::factory($this->view, $this->template_data);
            $layout->bind('body', $body);
            $body->bind('menu',$menu);

            $this->response->body($layout);
        }

        parent::after();
    }
}
