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
            //Load page for user
            require ROOT . HEAD;
            if($user = 'undefined'){
                require ROOT . SIGN_BUTTON;
             }else{
                echo $user;
             }
            require $view;
            foreach($model as $models){
                require DEFAULTAG;
                echo $models;
                require CLOSETAGDATA;
            }
            array_push($page , FOOT);
            return $page;
        }
    }