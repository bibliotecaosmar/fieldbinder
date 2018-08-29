<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Home Controller== #
    #=====================#

    class IndexController
    {
        private $user;
        private $view;

        public function __contruct(){
           echo 'o sam é brabo';
            /*$this->user = Http\Controllers\ControllerBehavior::getLogged();
            $this->user = Http\Controllers\ControllerVehavior::checkUser();
            $this->view = ($_POST['view']);
            loadPage();*/
        }

        private function loadPage($user , $view){
            $user = require_once (ROOT . VIEW . $user);
            $view = require_once (ROOT . VIEW . $view);
            echo (ROOT . HEAD);
            echo (ROOT . VIEW . $user);
            echo (ROOT . VIEW . $view);
            echo (ROOT . FOOT);
        }
    }