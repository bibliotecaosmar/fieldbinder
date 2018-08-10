<?php
    namespace Session;
    //Session
    class Session{
        private $user;
        private $nickname;

        private function startSession(){
            start_session();

            $_SESSION['user'] = $user;
            $_SESSION['nickname'] = $nickname;
        }
        
        private function destroySession(){
            destroy_session();
        }
    }