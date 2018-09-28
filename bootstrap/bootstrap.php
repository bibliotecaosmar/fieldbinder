<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    require_once '../vendor/autoload.php';
    
    $model = new Http\Controllers\GetModelController();
    $request = new Http\Request\Request();
    new Http\Controllers\Controller();