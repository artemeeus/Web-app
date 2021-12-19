<?php

if( !defined( 'MODULES_DIR' ) ) {
    throw new RuntimeException('config not set');
}

spl_autoload_register(
    function ($class_name) {
        $class_name = str_replace( "\\", "/", $class_name);
        if(file_exists( MODULES_DIR.$class_name . '.php' )) {
            if( DEBUG ) {
                echo "AUTOLOAD: trying to create ".$class_name.', require '.MODULES_DIR.$class_name.'.php<br>'.PHP_EOL;
            }
            require MODULES_DIR.$class_name . '.php';
        }
    }
);