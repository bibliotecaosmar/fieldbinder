<?php
    namespace app\http\request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements Log,Routes,RetreatPicture,FilterLogin,FilterDataInput
    {
        $request;

        function __construct($request){
            $this->request = $request;
        }

        public function filtLogin(FilterLogin $user , FilterLogin $password){

        }

        public function registerLog(Log $log){
            $data = date('Y-m-d h:i:s');
            array_push($log , "ip : $_SERVER['REMOTE_ADDR']");
            array_push($log , "action : $_POST['action']");
            array_push($log , "view : $_POST['view']");
            array_push($log , "user : $_POST['user']");
            array_push($log , "password : $_POST['password']");
            array_push($log , "time : $data");

            //regist log in a sql table or json
        }

        function setRoute(Route $route){
            $route = array(explode('/', $_SERVER['REQUEST_URI'], 2));
            
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
        public function retreatPic(RetreatPicture $pic){

        }

        public function validateRequest($request){

        }
    }