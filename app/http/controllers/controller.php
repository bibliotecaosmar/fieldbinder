<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#

    class Controller
    {
        private $user;
        private $view;
        private $action;
        private $model;
        
        public function __construct(LoadView $view, GetModel $model, $request, HandleAction $action, $exception){
            $lang = $_POST['language'] ?? 'pt-br';
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';
            $this->action = $_POST['action'] ?? '';

            //check level acess and execute action in first
            if($request->checkAcessLevelAction($this->user, $this->action)){
                $this->action = $action->handleAction($this->user, $this->action);
            }
            
            //Load page for user
            require_once ROOT . VIEW . LANG . $lang . '.php';
            require_once ROOT . VIEW . HEAD;
            $view->loadAccount($this->user);
            $view->loadView($this->view, $request->checkAcessLevelView($this->user, $this->view));
            $view->loadModel($model->getModel($this->view, $request->checkAcessLevelModel($request->checkUser())));
            $view->loadAction($this->action);
            require ROOT . VIEW . FOOT;
        }
    }