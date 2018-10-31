<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#

    class Controller
    {
        private $user;
        private $view;
        private $model;
        
        public function __construct($auxAction,
                                    $auxModel,
                                    LoadView $view,
                                    $model,
                                    $request,
                                    $action,
                                    $exception){
                                        
            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';

            //check level acess and execute action in first
            if($request->checkAcessLevelAction($this->user, $auxAction->action)){
                $this->action = $action->handleAction($this->user, $auxAction->class);
            }
            
            //Load page for user
            require_once ROOT . VIEW . HEAD;
            $view->loadAccount($this->user);
            $view->loadView($this->view, $request->checkAcessLevelView($this->user, $this->view));
            $view->loadModel($model->getModel($this->view, $auxModel));
            $view->loadAction($auxAction->action);
            require ROOT . VIEW . FOOT;
        }
    }