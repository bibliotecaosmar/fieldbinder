<?php
    namespace app\http\request;
    //Retreat Pictures

    interface FilterDataInput extends GetCookie
    {
        $typedata = $_COOKIE['typedata'];

        public function filtData();
        public function getData();
    }