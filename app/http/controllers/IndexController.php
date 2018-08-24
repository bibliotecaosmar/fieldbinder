<?php
    namespace app\http\controllers;
    #=====================#
    # ==Home Controller== #
    #=====================#

    class IndexController extends Controller
    {
        $user;

        public function __contruct(){
            $this->user = ControllerBehavior::getLogged();
            $this->user = checkUser();
            $this->loadHome();
        }
        //Alt between logged and signin/signup buttons
        private function checkUser($user){
            return ($user = 'undefined') ? (require (__DIR__ . SIGN_BUTTON)) : $user;
        }
        //load full page
        private function loadHome($user){
            $head = require_once HEAD;
            $view = require_once (__DIR__ . HTTP . ROOT . VIEW . INDEX);
            $foot = require_once FOOT
            echo $head.$user.$view.$foot;
        }
    }