<?php
    namespace app\http\controllers;
    #=====================#
    # ==Home Controller== #
    #=====================#

    class IndexController extends SignController 
    {
        protected $user;
        protected $view;

        public function __contruct(){
            $this->user = ControllerBehavior::getLogged();
            $this->view = loadIndex();
            $this->user = checkUser();
            $this->loadIndexPage();
        }
        //Alt between logged and signin/signup buttons
        protected function checkUser($user){
            return ($user = 'undefined') ? (require (__DIR__ . SIGN_BUTTON)) : $user;
        }
        //load specifically index page
        private function loadIndexPage($user , $view){
            $head = require_once (__DIR__ . ROOT . HEAD);
            $view = require_once (__DIR__ . ROOT . VIEW . INDEX)
            $foot = require_once (__DIR__ . ROOT . FOOT);
            echo $head.$user.$view.$foot;
        }
    }