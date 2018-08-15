<?php
    namespace Routes;
    #============#
    # ==Routes== #
    #============#
    class Routes{
        private $url;

        function setRoute($url){
            $url = array(explode('/', $_SERVER['REQUEST_URI'], 2));

        }
    }