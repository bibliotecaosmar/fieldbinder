<?php
    namespace app\http\controllers;
    #================#
    # ==Controller== #
    #================#
    
    class Controller
    {
        $action = $_POST['action'];
        $view = $_POST['view'];
        $model;
        
        function __construct(){
            RegisterLogs::registerLog();
            ValidateRequest::validateRequest();
            $model = ShowSpiece::showSpiece($view);
            ShowData::showData();
            ExecuteAction::executeAction($action);
            BuildView::buildPage($view , $model);
        }

    }
 