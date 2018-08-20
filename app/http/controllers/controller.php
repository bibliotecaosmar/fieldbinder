<?php
    namespace app\http\controllers\Controller;
    #================#
    # ==Controller== #
    #================#
    
    class Controller
    {
        $view = $_POST['view'];
        $model;
        
        function __construct(){
            Logs::registerLog();
            Routes::setRoute($view);
            ValidateRequest::validateRequest($model);
            BuildView::buildPage($view , $model);
        }
    }
 