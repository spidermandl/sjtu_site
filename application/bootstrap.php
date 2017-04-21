<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Set the mb_substitute_character to "none"
 *
 * @link http://www.php.net/manual/function.mb-substitute-character.php
 */
mb_substitute_character('none');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	// Replace the default protocol.
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
// if (isset($_SERVER['KOHANA_ENV']))
// {
// 	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
// }
/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
$env = getenv('KOHANA_ENV');
if (defined('Kohana::'.strtoupper($env)) === false)
{
    $env = 'production';
    Kohana::$environment = Kohana::PRODUCTION;
} else {
    Kohana::$environment = constant('Kohana::'.strtoupper($env));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
// Kohana::init(array(
// 	'base_url'   => '/kohana/',
// ));
Kohana::init(array(
     'base_url'  => '',
     'index_file' => FALSE,
     'profile'    => Kohana::$environment !== Kohana::PRODUCTION,
     'caching'    => Kohana::$environment === Kohana::PRODUCTION,

 ));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);
Kohana::$config->attach(new Config_File('config/'.$env));

$config = Kohana::$config->load('base');

Kohana::$base_url = $config->get('base_url', '/');
/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(Kohana::$config->load('modules')->as_array());

/**
 * Cookie Salt
 * @see  http://kohanaframework.org/3.3/guide/kohana/cookies
 * 
 * If you have not defined a cookie salt in your Cookie class then
 * uncomment the line below and define a preferrably long salt.
 */
// Cookie::$salt = NULL;
/**
 * set Cookie config
 */
Cookie::$salt = $config->get('salt', 'sjtu');
Cookie::$domain = $config->get('domain');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('news', 'news/<tid>(/page/<page>)',
    array(
        'tid' => '\d+',
        'page' => '\d+',
    ))->defaults(array(
          'controller' => 'news',
          'action'     => 'index',
));


// Route::set('news', 'news/<tid>',
//     array(
//         'tid' => '\d+',
//     ))->defaults(array(
//           'controller' => 'news',
//           'action'     => 'index',
// ));

Route::set('node', 'node/<id>',
    array(
        'id' => '\d+'
    ))->defaults(array(
          'controller' => 'node',
          'action'     => 'item',
));

Route::set('contacts', 'contacts/<tid>',
    array(
        'tid' => '\d+',
    ))
    ->defaults(array(
          'controller' => 'contacts',
          'action'     => 'index',
));

Route::set('areas', 'areas/<tid>',
    array(
        'tid' => '\d+',
    ))
    ->defaults(array(
          'controller' => 'areas',
          'action'     => 'index',
));

// Route::set('training', 'training/<tid>',
//     array(
//         'tid' => '\d+',
//     ))
//     ->defaults(array(
//           'controller' => 'training',
//           'action'     => 'index',
// ));
Route::set('training', 'training/<tid>(/page/<page>)',
  array(
      'tid' => '\d+',
      'page' => '\d+',
  ))->defaults(array(
        'controller' => 'training',
        'action'     => 'index',
));
Route::set('students', 'students/<tid>',
    array(
        'tid' => '\d+',
    ))
    ->defaults(array(
          'controller' => 'students',
          'action'     => 'index',
));

Route::set('advance', 'advance/<tid>',
    array(
        'tid' => '\d+',
    ))
    ->defaults(array(
          'controller' => 'advance',
          'action'     => 'index',
));

// Route::set('organization', 'organization/<tid>',
//     array(
//         'tid' => '\d+',
//     ))
//     ->defaults(array(
//           'controller' => 'organization',
//           'action'     => 'index',
// ));

Route::set('organization', 'organization/<tid>(/page/<page>)',
  array(
      'tid' => '\d+',
      'page' => '\d+',
  ))->defaults(array(
        'controller' => 'organization',
        'action'     => 'index',
));


Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
));







