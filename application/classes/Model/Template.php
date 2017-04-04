<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * all functions about template
 *
 * @author Desmond
 */

class Model_Template extends Model_Base
{
    static $cols = array(
        'id',
        'parent_id',
        'name',
        'type',
        'create_time',
        'update_time',
    );

    static $primary_key = 'id';

    static $table = 'template';

    public $id;
    public $parent_id;
    public $name;
    public $type;//模板zhonglei
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


    public function initial_data()
    {
        $this->parent_id   = 0;
        $this->create_time  = '';
        $this->update_time    = '';
        $this->name = '';
    }

    public function validate()
    {}
}
