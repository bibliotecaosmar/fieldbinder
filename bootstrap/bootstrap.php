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
    $transporter = new App\Model\Transporter($_POST['action'] ?? NULL, $request->checkUser());

    new App\Http\Controllers\Controller($transporter, 
                                        $view,
                                        $model, 
                                        $request, 
                                        $action, 
                                        $exception);