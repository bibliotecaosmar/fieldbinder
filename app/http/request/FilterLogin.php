<?php
    namespace app\http\request;
    //Filter of Login Inputs

    interface FilterLogin
    {
        const $user = $_POST['user'];
        const $password = $_POST['password'];

        public function filtLogin($user , $password);
    }