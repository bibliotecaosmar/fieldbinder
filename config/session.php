<?php
    namespace Session;
    //Session
    class Session extends Controller{
        private $user;
        private $nickname;

        function __construct($user, $nickname){
            $this->user = $user;
            $this->nickname = $nickname;
        }

        private function startSession(){
            start_session();

            $_SESSION['user'] = $user;
            $_SESSION['nickname'] = $nickname;
        }
        
        private function destroySession(){
            destroy_session();
        }
    }