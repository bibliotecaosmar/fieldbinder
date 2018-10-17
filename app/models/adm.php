<?php
    namespace Model;
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
        
        public function showValidateData(){}
    
        public function manageAccounts(){}
    }