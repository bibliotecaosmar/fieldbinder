<?php
    #===============#
    # ==Bootstrap== #
    #===============#
    require_once '../config/config.php';

    function loader($class){
        $class = ROOT . DS . str_replace('\\' , DS , $class) . '.php';
        require_once $class;
    }
    
    spl_autoload_register('loader');

    new log\Log();
    $rule = new route\Routes();
    new app\http\request\Request($rule);
    new app\http\controllers\Controller();