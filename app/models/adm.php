<?php
    namespace App\Model;
    #===========#
    #  ==Adm==  #
    #===========#
    
    class Adm extends Database implements User
    {
        private $nickname;
        private $pic;
        private $email;
        private $born;
        private $name;
        
        public function showProfile(){}
        
        public function showVotation(){}
    
        public function manageAccounts(){}
    }