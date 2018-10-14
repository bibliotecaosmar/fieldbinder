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

        public function __construct(LoadView $view, GetModel $model, $request, HandleAction $handler, $exception){
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';

            /*tira a responsabilidade do Main Controller */
            
            //Load page for user
            require_once ROOT . VIEW . HEAD;
            $view->loadAccount($this-user);
            if($request->checkAcessLevelView($this->user, $this->view)){
                $view->loadView($this->view);
            }
            $model->loadModel($model->getModel($request->checkAcessLevelModel(), $this->view));
            if(isset($_POST['action'])){
                $this->action = $_POST['action'];
                if($request->checkLevelAcessAction($this->user, $this->action)){
                    $this->action = $handler->handleAction($this->user, $this->action);
                }
            }
            require ROOT . VIEW . FOOT;
        }
    }