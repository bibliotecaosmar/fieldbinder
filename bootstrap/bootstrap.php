<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../vendor/autoload.php';

    $model = new Http\Controllers\ModelController();
    $handler = new Http\Controllers\ActionController();
    $request = new Http\Request\Request();
    $exception = new Exception();
    
    new Http\Controllers\Controller($model , $request , $handler , $exception);