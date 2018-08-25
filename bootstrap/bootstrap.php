<?php
    #===============#
    # ==Bootstrap== #
    #===============#
    require_once '../config/config.php';

    //autoload of class
    function loader($class){
        $class = ROOT . DS . str_replace('\\' , DS , $class) . '.php';
        require_once $class;
    }
    
    spl_autoload_register('loader');

    new app\http\controllers\IndexController;
    new route\Routes;