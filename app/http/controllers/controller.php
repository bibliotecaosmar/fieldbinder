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
        
        public function __construct($transporter,
                                    $view,
                                    $model,
                                    $request,
                                    $action,
                                    $exception){
            
            if(!isset($_COOKIE['language'])){
                if(!isset($_POST['setLanguage'])){
                    $view->catchLanguage();
                }
                setcookie('language', $_POST['setLanguage']);
            }
            $view->selectLanguage($_COOKIE['language'] ?? $_POST['setLanguage']);

            $this->user = $_COOKIE['user'] ?? 'undefined';
            $this->view = $_POST['view'] ?? 'index';

            //check level acess and execute action in first
            if($request->checkAcessLevelAction($this->user, $transporter->action)){
                $this->action = $action->handleAction($transporte->classAction, $transporter->action);
            }

            //Load page for user
            $view->loadHead();
            $view->loadAccount($this->user);
            $view->loadView($this->view, $request->checkAcessLevelView($this->user, $this->view));
            $view->loadModel($model->getModel($this->view, $transporter->user));
            $view->loadAction($this->action);
            $view->loadFoot();
        }

        private function sendLanguage($view){
            
        }
    }