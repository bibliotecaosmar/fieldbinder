<?php
    /*define ( 'WWW_ROOT' , dirname(__FILE__) );
    define ( 'DS' , DIRECTORY_SEPARATOR );*/

    function __autoload($class){
        if(file_exists($class.'php')){
            require_once $class.'php'
        }
    }