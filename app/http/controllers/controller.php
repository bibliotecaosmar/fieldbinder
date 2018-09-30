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

        public function __construct($model , $request , $handler , $exception){
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';
            $this->model = $model->getModel($this->user , $this->view);
            if(isset($_POST['action'])){
                $this->action = $this->sendAction($this->user , $this->view , $request , $handler , $exception);
            }
            $this->loadView($this->user , $this->view , $this->action , $this->model , $request , $exception);
        }
        //Send action to handler and return if acess level is okey
        private function sendAction($user , $view, $request , $handler , $exception){
            $action = $_POST['action'];
            //check acess level
            if($request->checkLevelAcessAction($user , $action)){
                $action = $handler->handleAction($action);
                return $action;
            }
            return $exception('warning' , 'acessLevel' , 'notAvoid');
        }
        //Load views elementies       
        private function loadView($user , $view , $action , $model , $request){
            //Check acess level of view
            $view = $request->checkAcessLevelView($user , $view);
            $user = 'undefined' ? (ROOT . SIGN_BUTTON) : $user;
            //Load page for user
            require_once ROOT . HEAD;
            echo $user;
            require_once $view;
            foreach($model as $models){
                require DEFAULTAG;
                echo $models;
                require CLOSETAGDATA;
            }
            require_once FOOT;
        }
    }