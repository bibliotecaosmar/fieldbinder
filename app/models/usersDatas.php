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
    
    //adult users
    class Adult extends User{
        
    }
    
    //adm
    final class Adm extends Adult{
        private $name;

        private function __construct(){
            $this->name = $name;
        }
        private function envyReport(){
            sendEmail(self::$email);
        }
    }

    //volunty profissionals 
    final class Expert extends Adult{
        private $name;
        private $diploma;
        
        private fastInclude(){

        }
    }
