<?php
    //////////////
    ///Autoload///
    //////////////
    function __autoload($class) {
        $class = WWW_ROOT . DS . str_replace('\\', DS, $class) . 'php';
        if (file_exists($class . '.php')) {
            require($class . '.php');
        } else {
            throw new Exception('Unable to load class named $class');
        }
    }