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
            $this->view = $view->getView($this->user , $request);
            if(isset($_POST['action'])){
                $this->action = $handle->handleAction($this->user , $request);
            }
            $this->model = $model->getModel($this->user , $this->view);            
                //check acess level

            //Load page for user
            require_once ROOT . VIEW . HEAD;
            require_once ($user = 'undefined') ? (ROOT . VIEW . SIGN_BUTTON) : $user;
            $view->loadView($this->view);
            $model->loadModel($this->model);//$model
            require ROOT . VIEW . FOOT;
        }
    }