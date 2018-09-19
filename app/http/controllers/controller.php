<?php
    namespace Http\Controllers;
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
                $action = $_POST['action']; 
                $this->view = $this->sendAction($user , $view, $action);
            }
            $this->loadView();
        }

        private function sendAction($user , $view , $action){
            $action = $_POST['action'];
            //check acess level
            if(AcessLevel::checkLevelAcess($user , $view , $action)){
                HandleAction::handleAction($action);
            }
            array_push($view, $action);
            return $view;
        }
        private function loadView($user , $view){
            //Control with Model Include Data
            $model = GetModel::getModel($user , $view);
            //Load views elementies
            array_push($view, (($user = 'undefined') ? (ROOT . SIGN_BUTTON) : $user));
            array_push($view, GetView::getView($view));
            array_push($view, GetView::getModel($model));
            //Load page for user
            require_once HEAD;
            foreach($view as $elementy){
                require $elementy;
            }
            require_once FOOT;
        }
    }