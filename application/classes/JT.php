<?php defined('SYSPATH') or die('No direct script access.');


class JT
{
    const per_page = 1;

    public static $CATEGORY
        = array(
            'NEWS' => 1, 
            'CONTACTS' => 6,
            'TRAINING' =>11,
            'AREAS' => 12,
            'ADVANCE' => 9,
            'ORGANIZATION' => 8,
            'STUDENTS' => 7,
        );

    /**
    * 获取网页种类string
    **/
    public static function category_string($parent_template_id){
        switch ($parent_template_id) {
            case JT::$CATEGORY['NEWS']:
                return 'news';

            case JT::$CATEGORY['CONTACTS']:
                return 'contacts';

            case JT::$CATEGORY['TRAINING']:
                return 'training';

            case JT::$CATEGORY['AREAS']:
                return 'areas';

            case JT::$CATEGORY['ADVANCE']:
                return 'advance';

            case JT::$CATEGORY['ORGANIZATION']:
                return 'organization';

            case JT::$CATEGORY['STUDENTS']:
                return 'students';
            default:
                return '';
        }
    }

    /**
     * 获取父模板
     **/
    public static function get_lead_templates($category){
        return Model_Template::find_by_id($category);
    }

    /**
     * 获取子模板
     **/
    public static function get_sub_templates($category){
        return Model_Template::find(array('parent_id' => $category));
    }
    /**
     * @var array result code to human language short
     */
    public static $result
        = array(
            "4"  => "AC",
            "5"  => "PE",
            "6"  => "WA",
            "7"  => "TLE",
            "8"  => "MLE",
            "9"  => "OLE",
            "10" => "RE",
            "11" => "CE",
        );
    /**
     * @var array language code to human language
     */
    public static $language
        = array(
            '0' => 'C',
            '1' => 'C++',
            '2' => 'Pascal',
            '3' => 'Java'
        );
    /**
     * @var array private value to human language
     */
    public static $private
        = array(
            0 => 'public',
            1 => 'private'
        );
    /**
     * @var  array  result code to human language readable long
     */
    public static $status
        = array(
            "4"  => "Accepted",
            "5"  => "Presentation Error",
            "6"  => "Wrong Answer",
            "7"  => "Time Limit Exceed",
            "8"  => "Memory Limit Exceed",
            "9"  => "Output Limit Exceed",
            "10" => "Runtime Error",
            "11" => "Compile Error",
            "12" => "Compile OK",
            "13" => "Test Running Done",
            "0"  => "Pending",
            "1"  => "Pending Rejudging",
            "2"  => "Compiling",
            "3"  => "Running &amp; Judging"
        );

    /**
     * 判断当前用户是否是管理员
     *
     * @return bool
     */
    public static function is_admin()
    {
        $user = Auth::instance()->get_user();
        if ( $user )
            return $user->is_admin();

        return false;
    }
    /**
     * 判断当前用户是否是GROUP管理员
     *
     * @return bool
     */
    public static function is_leader()
    {
        $user = Auth::instance()->get_user();
        if ( $user )
            return $user->is_leader();

        return false;
    }

    public static function is_backend()
    {
        if ( Request::current()->directory() == 'Admin')
        {
            return true;
        }
        return false;
    }

    public static function is_backendl()
    {
        if ( Request::current()->directory() == 'Leader')
        {
            return true;
        }
        return false;
    }
    /**
     * proxy for permissions
     *
     * @return array
     */
    public static function permission_list()
    {
        return Model_Privilege::permission_list();
    }


    /**
     * 过滤数据，包括tag和special chars
     *
     * @param $value
     * @return array|string
     */
    public static function clean_data($value)
    {
        if ( is_array($value) )
        {
            foreach($value as $k => $v)
            {
                $value[$k] = OJ::clean_data($v);
            }
        } else {
            $value = strip_tags($value);
            $value = HTML::chars($value, TRUE);
        }

        return $value;
    }

    /**
     * test is oi mode enableds
     *
     * @return bool
     */
    public static function is_oi_mode()
    {
        return Kohana::$config->load('base')->get('oi_mode', false);
    }

    public static function is_captcha_enabled()
    {
        return Kohana::$config->load('base')->get('captcha_mode', false);
    }

    /**
     * get submit limitation
     *
     * @return string
     */
    public static function get_submit_time()
    {
        return Kohana::$config->load('base')->get('submit_time', 0);
    }
}
