<?php
    ////////////////////
    ///Datas of Users///
    ////////////////////
    
    class User{
        public $nickname;
        protected $email;
        protected $age;

        protected function includeData(){
            
        }
    }
    
    //adult users
    class Adult extends User{
        protected function filterPictures(){

        }
    }
    
    //adm
    final class Adm extends Adult{
        private $name;

        private function editUser(){

        }

        private function envyReport(){

        }
    }

    //volunty profissionals 
    final class Expert extends Adult{
        private $name;
        private $diploma;
        
        private fastInclude(){

        }
    }
