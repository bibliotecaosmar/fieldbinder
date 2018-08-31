<?php
    namespace App\Routes;
    #============#
    # ==Routes== #
    #============#

    class Routes
    {
        private $route;

        public function __construct($route){
            $this->route = explode('/' , $_SERVER['REQUEST_URI']);
        }

        private function getRoute($route){
            //define routes
            switch($route){
                case ['/']:
                case ['/' , 'plant']:
                case ['/' , 'animal']:
                case ['/' , 'insect']:
                case ['/' , 'mushroom']:
                case ['/' , 'signin']:
                case ['/' , 'signup']:
                case ['/' , 'ourproposal']:
                case ['/' , 'guide']:
            }
        }
    }