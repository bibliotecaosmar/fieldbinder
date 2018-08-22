<?php
    namespace routes;
    #============#
    # ==Routes== #
    #============#

    class Routes
    {
        private $route = array(explode('/', $_SERVER['REQUEST_URI'], 2));
        
        function __construct(){
            setRoute();
        }
        private function setRoute($route){          
            function router($route){
                switch($route){
                    case ['index']:
                        return $route = 'index';
                    case ['index'] , ['signup']:
                        return $route = 'signup';
                    case ['index'] , ['signin']:
                        return $route = 'signin';
                    case ['index'] , ['ourproposal']:
                        return $route = 'ourproposal';
                    case ['index'] , ['plant']:
                        return $route = 'plant';
                    case ['index'] , ['insect']:
                        return $route = 'insect';
                    case ['index'] , ['animal']:
                        return $route = 'animal';
                    case ['index'] , ['mushroom']:
                        return $route = 'mushroom';
                    default:
                        throw new app\exceptions\Exception(404);
                }
            }
        }
    }