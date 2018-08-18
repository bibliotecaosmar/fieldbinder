<?php
    namespace FB\Routes;
    #============#
    # ==Routes== #
    #============#

    class Routes
    {
        private $url;
        private $route;

        function __construct(){
            setRoute();
        }

        function getRoute($route){

        }

        function setRoute($url){
            private $url = array(explode('/', $_SERVER['REQUEST_URI'], 2));
            
            function __construct(){
                router();
            }
            function router(){
                switch($url){
                    case ['index']:
                        Request::$route = 'index';
                    case ['index'] , ['signup']:
                        Request::$route = 'signup';
                    case ['index'] , ['signin']:
                        Request::$route = 'signin';
                    case ['index'] , ['ourproposal']:
                        Request::$route = 'ourprososal';
                    case ['index'] , ['controlPainel']:
                        Resquest::$route = 'controlPainel';
                    case ['index'] , ['plant']:
                        Request::$route = 'plant';
                    case ['index'] , ['insect']:
                        Request::$route = 'insect';
                    case ['index'] , ['animal']:
                        Request::$route = 'animal';
                    case ['index'] , ['mushroom']:
                        Request::$route = 'mushroom';
                    default:
                        throw new Exception(404);
                }
            }
        }
    }