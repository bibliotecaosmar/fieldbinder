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
            $this->user = ControllerLogin::getLogged();
            $this->user = ControllerLogin::checkUser();
            $this->view = ($_POST['view']) ?? 'index';
            loadPage();
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