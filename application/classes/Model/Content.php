<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * all functions about content
 *
 * @author Desmond
 */

class Model_Content extends Model_Base
{
    static $cols = array(
        'id',
        'template_id',
        'link',
        'title',
        'create_time',
        'update_time',
    );

    static $primary_key = 'id';

    static $table = 'content';

    public $id;
    public $template_id;
    public $link;
    public $title;
    public $create_time;
    public $update_time;

    /**
     * @param string $id
     *
     * @return Model_Contest
     */
    public static function find_by_id($id)
    {
        return parent::find_by_id($id);
    }

    public static function find_by_child_category($page = 1, $limit = 50,$category)
    {
        $orderby = array(
            'create_time' => self::ORDER_DESC,
        );
        $filter = array(
            'template_id' => $category,
        );
        $news_list = Model_Content::find($filter, $page, $limit, $orderby);
        return $news_list;
    }

    public static function find_by_parent_category($page = 1, $limit = 50,$category)
    {
        $orderby = array(
            Model_Content::$table.'.create_time' => self::ORDER_DESC,
        );

        $filters = array(
        );

        $query = DB::select(self::$table.'.id',
                            self::$table.'.title', 
                            self::$table.'.template_id',
                            self::$table.'.link',
                            self::$table.'.create_time',
                            self::$table.'.update_time')
            ->from(static::$table);//as 语法 array(self::$table.'.id' , 'cid'),array(self::$table.'.title' , 'title')
        
        $query->join(Model_Template::$table,'LEFT')->on(self::$table.'.template_id' , '=' , Model_Template::$table.'.id')
            ->where(Model_Template::$table.'.parent_id','=',$category);
        
        return Model_Content::basic_find($query,$filters,$page,$limit,$orderby);
    }

    public static function basic_find($query, $filters, $page = 1, $limit = 50, $orderby=array()){
        foreach($filters as $col => $value)
        {
            $query->where($col, '=', $value);
        }
        if ( $limit ) $query->limit($limit);
        if ( $page ) $query->offset( $limit * ($page - 1));

        foreach($orderby as $col => $order)
        {
            $query->order_by($col,  $order);
        }

        $result = $query->as_object(get_called_class())->execute();
        //var_dump($result->as_array());
        return $result->as_array();
    }

    public function initial_data()
    {
        $this->template_id       = 0;
        $this->create_time  = '';
        $this->update_time    = '';
        $this->link = '';
        $this->title = '';
    }

    public function validate()
    {}
}
