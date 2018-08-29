<?php
    namespace App\Http\Controllers;
    #================================#
    # ==Get User of the Controller== #
    #================================#

    //Interface used for all concrect controllers
    interface ControllerBehavior
    {
        public function getLogged();
        
        public function getLogin($login);
        public function getRegisterForm($form);

        public function checkUser($user);

        public function executeAction($action);

        public function loadView();
        public function loadPage($view , $user , $model);
    }
