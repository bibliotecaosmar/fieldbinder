<?php
    namespace app\http\request;
    //Get User, Time, ... and all Cookies and become them in legible datas

    interface GetCookie
    {
        $user = $_COOKIE['login'];
        $time = //get time browser

        public function filtCookie();
    }