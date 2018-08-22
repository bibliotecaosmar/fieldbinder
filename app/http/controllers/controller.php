<?php
    namespace app\http\controllers;
    #================#
    # ==Controller== #
    #================#
    
    class Controller
    {
        private $user;
        private $view;
        private $action;
        private $model;

        public function __construct($view , $model){
            $this->user = $this->getUser();
            $this->view = $view;
            $this->action = getAction();
            $this->model = $model;
            catchModel();
            buildPage($this->view , $this->model);
        }

        private function getUser(){
            return (isset($_COOKIE['user'])) ? ($_COOKIE['user']) : 'undefined';
        }

        private function getAction(){
            return (isset($_POST['action'])) ? ($_POST['action']) : '';
        }

        private function catchModel($user , $action){

        }
    }
 