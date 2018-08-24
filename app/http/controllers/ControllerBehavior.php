<?php
    namespace app\http\controllers;
    #================================#
    # ==Get User of the Controller== #
    #================================#

    interface ControllerBehavior
    {
        $login = {
            $user;
            $password;
        };
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
