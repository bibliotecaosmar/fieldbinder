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

        public function __construct(GetModel $model , $request , HandleAction $handler , NotificationMessage $exception){
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';
            if(!$request->checkAcessLevelView($this->user , $this->view)){
                $this->view = 'E';
            }
            if(isset($_POST['action'])){
                $this->action = $_POST['action'];
                if($request->checkLevelAcessAction($this->user , $this->action)){
                    $this->action = $handle->handleAction($this->user , $this->action);
                }
            }
            $this->model = $model->getModel($this->user , $this->view);            

            //Load page for user
            require_once ROOT . VIEW . HEAD;
            if($user = 'undefined'){
                require_once ROOT . VIEW . SIGN_BUTTON;
            }else{
                echo $user;
            }
            $exception->showMessage($view->loadView($this->view));
            $exception->showMessage($model->loadModel($this->model));
            require ROOT . VIEW . FOOT;
        }
    }