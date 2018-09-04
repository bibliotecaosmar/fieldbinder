<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#

    class Controller
    {
        private $user;
        private $view;
        private $model;

        public function __construct()
        {
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'];
            if(isset($_POST['action'])){ 
                $this->executeAction();
            }
            $this->loadView();
        }

        private function executeAction($user , $view){
            $action = $_POST['action'];
            if(AcessLevel::checkLevelAcess($user , $view , $action)){
                HandleAction::handleAction($action);
            }
        }
        private function loadView($user , $view){
            $model = GetModel::getModel($user , $view);
            array_push($view, (($user = 'undefined') ? (ROOT . SIGN_BUTTON) : $user));
            array_push($view, GetView::getView($view));
            array_push($view, GetView::getModel($model));
            require_once HEAD;
            foreach($view as $elementy){
                require $elementy;
            }
            require_once FOOT;
        }
    }