<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 纯文章页面模板
 **/
abstract class Controller_SubBase extends Controller_Base
{
	/*
	 *左菜单
	 */
    protected $left_menu = 'left_menu';
    /**
    * 右侧内容
    */
    protected $right_content = 'right_content';
    protected $template_id = 0;
    protected $page = NULL;
    protected $articles = NULL;
    /**
     * 文章核心内容
     **/
    protected $article = NULL;

	/**
	 * 父模板id
	 */
	abstract protected function getParentTemplateId();

    /**
     * 设置菜单内容
     */
    protected function set_menu(){
        $parent = Model_Template::find_by_id($this->getParentTemplateId());
        $children = Model_Template::find(array('parent_id' => $this->getParentTemplateId()));

        $this->template_data['parent'] = $parent;
        $this->template_data['children'] = $children;
    }

    /**
     * 请求列表
     */
    public function action_index()
    {
    	$this->index_sub_list();
    }

    /**
     * 获取二级列表
     **/
    public function index_sub_list(){
        $this->set_menu();
        $template_id = $this->request->param('tid', NULL);
        $page = $this->request->param('page', NULL);
        if ($page == NULL) {
            $page = 1;
        }
        if ($template_id==NULL) {
            $child = $this->template_data['children'][0];
            $template_id = $child->id;
        }else{
            $child = Model_Template::find_by_id($template_id);
        }
        
        $count = Model_Content::count(array('template_id' => $template_id,));

        /**
         * 获取该类型列表
         */
        $this->articles = Model_Content::find(
                array('template_id' =>$template_id,),
                $page,JT::per_page,
                array('create_time' => Model_Base::ORDER_DESC,));

        $index = (int)$page;
        $total = ceil($count/JT::per_page);

        /**
         * 模板数据
         **/
        $this->template_data['template_id'] = $template_id;
        $this->template_data['child'] = $child;
        $this->template_data['current_page'] = $index;
        $this->template_data['count'] = ceil($count/JT::per_page);
        $this->template_data['start'] = $index-5>0?($index-5):1;
        $this->template_data['end'] = $index+4>$total?$total:($index+4);
    }

    /**
    * 直接二级菜单
    **/
    public function index_item(){
        $this->set_menu();
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
    /**
	 * 获取单页文章
	 **/
    public function action_item(){
    	$this->set_menu();
        $this->page = View::factory('article/'.$this->article->link,$this->template_data);
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
            $body->bind('page',$this->page);
            $body->bind('articles',$this->articles);
            
            $this->response->body($layout);
        }

        parent::after();
    }
}
