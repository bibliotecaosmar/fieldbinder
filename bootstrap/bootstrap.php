<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../vendor/autoload.php';
    
    $model = new Http\Controllers\GetModelController();
    $handler = new Http\Controllers\HandleActionController();
    $request = new Http\Request\Request();
    $exception = new Exception();
    new Http\Controllers\Controller($model , $request , $handler , $exception);