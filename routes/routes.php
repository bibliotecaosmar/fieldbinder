<?php
    namespace routes;
    #============#
    # ==Routes== #
    #============#

    class Routes
    {
        private $route = array(explode('/', $_SERVER['REQUEST_URI'], 2));
        
        public function __construct(){
            $this->setRoute();
        }
        private function setRoute($route){          
            function router($route){
                switch($route){
                    case []:
                        return $route = 'index';
                    case ['signup']:
                        return $route = 'signup';
                    case ['signin']:
                        return $route = 'signin';
                    case ['ourproposal']:
                        return $route = 'ourproposal';
                    case ['plant']:
                        return $route = 'plant';
                    case ['index' , 'insect']:
                        return $route = 'insect';
                    case ['index' , 'animal']:
                        return $route = 'animal';
                    case ['index' , 'mushroom']:
                        return $route = 'mushroom';
                    default:
                        throw new app\exceptions\Exception(404);
                }
            }
        }
    }