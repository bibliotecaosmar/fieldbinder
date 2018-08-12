<?php
    namespace Routes;
    ////////////
    ///routes///
    ////////////
    class Routes{
        private $url;

        function __construct($url){
            $this->url = $url;
        }

        private function route($url){
            $url = array(explode('/', $_SERVER['REQUEST_URI'], 2));
            $url = new Controller($url);
        }
    }