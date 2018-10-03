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

        public function __construct(GetModel $model , $request , HandleAction $handler , $exception){
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';
            $this->model = $model->getModel($this->user , $this->view);
            //Check acess level of view
            if(!$request->checkAcessLevelView($this->user , $this->view)){
                $this->view = 'plant';
            }
            if(isset($_POST['action'])){
                $this->action = $this->sendAction($this->user , $this->view , $request , $handler , $exception);
            }
            $this->loadView($this->user , $this->view , $this->action , $this->model);
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
        private function loadView($user , $view , $action , $model){
            //Load page for user
            require_once ROOT . VIEW . HEAD;
            if($user = 'undefined'){
                require_once ROOT . VIEW . SIGN_BUTTON;
             }else{
                echo $user;
             }
            require_once ROOT . VIEW . $view . '.php';
            foreach($model as $models){
                require ROOT . VIEW . DEFAULTAG;
                echo $models;
                require ROOT . VIEW . CLOSETAGDATA;
            }
            require ROOT . VIEW . FOOT;
        }
    }