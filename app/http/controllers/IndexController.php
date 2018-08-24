<?php
    namespace app\http\controllers;
    #=====================#
    # ==Home Controller== #
    #=====================#

    class IndexController
    {
        private $user;
        private $view;

        public function __contruct(){
            $this->user = ControllerBehavior::getLogged();
            $this->view = loadIndex();
            $this->user = ControllerVehavior::checkUser();
            ControllerBehavior::loadPage($this->user , $this->view);
        }
        //load specifically index view
        private function loadIndex(){
            return (require_once (__DIR__ . HTTP . ROOT . VIEW . INDEX));
        }
    }