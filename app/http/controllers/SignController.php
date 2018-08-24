<?php
    namespace app\http\controller;
    #======================#
    # ==Signs Controller== #
    #======================#

    class SignController
    {
        private $view;

        public function __construct($view){
            $this->view = $view;
            loadView();
            ControllerBehavior::loadPage($view);
        }
        //load view of login or register
        private function loadView($view){
            switch($view){
                case  'signin':
                    return $view = require_once (__DIR__ . ROOT . VIEW . SIGNIN);
                    break;
                case 'signup':
                    return $view = require_once (__DIR__ . ROOT . VIEW . SIGNUP);
                    break;
            }
        }
    }