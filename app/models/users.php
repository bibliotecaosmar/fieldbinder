<?php
    namespace User;
    ////////////////////
    ///Datas of Users///
    ////////////////////
    class User{
        protected $nickname;
        protected $email;
        protected $age;

        private function __contruct($nickname,$email,$age){
            $this->nickname = $nickname;
            $this->email = $email;
            $this->age = $age;
        }

        protected function 
    }
    /////////////////
    ///Adult Users///
    /////////////////
    class Adult extends User{
        
    }
    /////////
    ///Adm///
    /////////
    final class Adm extends Adult{
        private $name;

        private function __construct(){
            $this->name = $name;
        }
        //send email
        private function envyReport(){
            sendEmail(self::$email);
        }
    }
    ///////////////////////////
    ///Volunty Profissionals///
    ///////////////////////////
    final class Expert extends Adult{
        private $name;
        private $diploma;
        
        }
    }
