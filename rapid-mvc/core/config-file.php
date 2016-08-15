<?php

# directory constants
define('SITE_ROOT', str_replace('\\', '/', dirname(dirname(__FILE__))));
define('MODELS_DIR', SITE_ROOT . '/app/models/');
define('VIEWS_DIR', SITE_ROOT . '/app/views/');
define('CONTROLLERS_DIR', SITE_ROOT . '/app/controllers/');
define('CLASSES_DIR', SITE_ROOT . '/core/classes/');
define('ASSETS_DIR', SITE_ROOT . '/assets/');
define('CSS_DIR', ASSETS_DIR . 'css/');
define('IMG_DIR', ASSETS_DIR . 'img/');
define('JS_DIR', ASSETS_DIR . 'js/');
define('SITE_THEME', VIEWS_DIR . 'default-theme/');

# environment specific constants
define ( 'HTTP_SERVER_PORT', $_SERVER['SERVER_PORT'] ); # omit this if default server port 80 is used
define ( 'VIRTUAL_LOCATION', '/rapidx/' ); # virtual project root relative to server root
define('USE_SSL', 'no'); # we enable and enforce SSL when this is set to anything else than 'no'
define('TIMEZONE', 'Asia/Kolkata');
define('TOKEN', 'token');
define('SESSION_NAME', 'jaycos');

# database specific constants   
define ( 'DB_HOST', 'localhost' );
define ( 'DB_NAME', 'jayco-plastics' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'pradeep' );
define( 'DB_PERSISTENT', FALSE );

# error reporting settings
define('ERROR_TYPES', E_ALL);
define('DEVELOPMENT_MODE', 1); // set 0 in production
define('IS_WARNING_FATAL', 1); // set 0 in production
define('LOG_ERRORS', 0);
define('ERRORS_LOG_FILE', '/var/tmp/edulist_errors.log'); // chamge path when live

# site maintainence mode
define('MAINTAINENCE_MODE', 1);

# Debug user defined constants
//echo '<pre>', print_r(get_defined_constants(TRUE)['user'],TRUE), '</pre>';
