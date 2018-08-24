<?php
    namespace app\http\controllers;
    #========================#
    # ==Content Controller== #
    #========================#

    class ContentController
    {
        private $user;
        private $view;
        private $model;
        
        public function __construct($view){
            $this->user = ControllerBehavior::getLogged()
            $this->user = ControllerBehavior::checkUser();
            $this->view = $view;
            $this->loadView();
            //function for load miniatures and spieces datas
            //function for load miniatures and includeds datas for validation
            Controller::loadPage($this->user , $this->view , $this->model);
        }
        //load view of contents
        private function loadView($view){
            switch($view){
                case 'plant':
                    return $view = require_once (__DIR__ . ROOT . VIEW . PLANT);
                    break;
                case 'animal':
                    return $view = require_once (__DIR__ . ROOT . VIEW . ANIMAL);
                    break;
                case 'insect':
                    return $view = require_once (__DIR__ . ROOT . VIEW . INSECT);
                    break;
                case 'mushroom':
                    return $view = require_once (__DIR__ . ROOT . VIEW . MUSHROOM);
                    break;
            }
        }
    }