<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../config/config.php';
    require_once '../vendor/autoload.php';
    require_once '../config/lang.php';

    $view = new App\Http\Controllers\ViewController();
    $model = new App\Http\Controllers\ModelController();
    $handler = new App\Http\Controllers\ActionController();
    $request = new App\Http\Request\Request();
    $exception = new App\Exceptions\Exception();
    
    new App\Http\Controllers\Controller($view, $model, $request, $handler, $exception);