<?php

# fetch configurations
require_once 'config-file.php';

# if maintainence mode on
if(MAINTAINENCE_MODE) {
    include_once 'maintainence_page.php';
    die();
}

# app class autoloader function
function app_classes($class) {
    $locate = array ( CONTROLLERS_DIR, MODELS_DIR );
    foreach ( $locate as $path ) {
        $class_folder = str_replace('_', '-', $class);
        $file = $path . $class_folder . '/' . $class . '.php';  
        if ( file_exists ( $file ) ) {
            require_once $file;
            break;
        }
    }
}

# system classes autoloader function
function system_classes($class) {
    if ( file_exists ( CLASSES_DIR . $class . '.php' ) ) {
        require_once CLASSES_DIR . $class . '.php';
    }
}

# register class autoloaders
spl_autoload_register('system_classes');
spl_autoload_register('app_classes');

# start session
Session::start();

# set default timezone
date_default_timezone_set(TIMEZONE);

# set custom error handler
set_error_handler(['SweetError', 'handler'], ERROR_TYPES);

# dispatch application request
Router::route();

# kill set database connection
DB::kill();