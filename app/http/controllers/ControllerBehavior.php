<?php
    namespace app\http\controllers;
    #================================#
    # ==Get User of the Controller== #
    #================================#

    //Interface used for all concrect controllers
    interface ControllerBehavior
    {
        //login for validation
        $login = {
            $user;
            $password;
        };
        //register form for validation
        $registerForm = {
            $email;
            $password;
            $nickname;
            $born;
            $name;
            $diploma;
        };

        public function getLogged();
        public function getAction();
        public function getLogin($login)
        public function getRegisterForm($form);
    }
