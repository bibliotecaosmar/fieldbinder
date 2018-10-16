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
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';
            $this->action = $action->getAction();
            $this->model = $request->checkAcessLevelModel(/*Interface*/);
            
            //Load page for user
            require_once ROOT . VIEW . HEAD;
            $view->loadAccount($this-user, $exception);
            $view->loadView($this->view, $request->checkAcessLevelView($this->user, $this->view), $exception);
            $view->loadModel($model->getModel($this->view, $this->model, $exception));
            $view->loadAction($action->handleAction($this->user, $this->action, $request->checkLevelAcessAction($this->user, $this->action)), $exception);
            require ROOT . VIEW . FOOT;
        }
    }