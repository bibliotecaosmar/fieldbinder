<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../config/config.php';
    require_once '../vendor/autoload.php';

    $view = new App\Http\Controllers\ViewController();
    $model = new App\Http\Controllers\ModelController();
    $action = new App\Http\Controllers\ActionController();
    $request = new App\Http\Request\Request();
    $exception = new App\Exceptions\Exception();
    $auxAction = new App\Model\AuxAction($_POST['action'] ?? NULL);
    $auxModel = new App\Model\AuxModel();

    new App\Http\Controllers\Controller($auxAction, 
                                        $auxModel->setModelUser($request->checkUser()), 
                                        $view,
                                        $model, 
                                        $request, 
                                        $action, 
                                        $exception);