<?php
    namespace Http\Controllers;
    #================#
    # ==Controller== #
    #================#

    class Controller
    {
        private $user;
        private $view;
        private $action;
        private $model;

        public function __construct()
        {
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'];
            $this->model = GetModel::getModel($user , $view);
            if(isset($_POST['action'])){ 
                $this->action = $this->sendAction($this->user , $this->view);
            }
            $this->loadView($user , $view , $action , $model);
        }
        //Send action to handler and return if acess level is okey
        private function sendAction($user , $view , $action){
            $action = $_POST['action'];
            //check acess level
            if(AcessLevel::checkLevelAcessAction($user , $action)){
                $action = HandleAction::handleAction($action);
                return $action;
            }
            return new Exception('warning' , 'acessLevel' , 'notAvoid');
        }
        //Load views elementies       
        private function loadView($user , $view , $action , $model){
            //Check acess level of view
            $view = AcessLevel::checkAcessLevelView($user , $view);
            $user = 'undefined' ? (ROOT . SIGN_BUTTON) : $user;
            //Load page for user
            require_once HEAD;
            require_once $user;
            require_once $view;
            require_once $model;
            require_once FOOT;
        }
    }