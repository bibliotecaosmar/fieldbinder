<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../config/config.php';
    
    function load($class){
        $class = explode("\\" , $class);
        $class = ROOT.DS.implode(DS , $class);
        require_once $class;
    }

    spl_autoload_register(load($class));

    use app/http/controllers/;

    new Controller;
    

    