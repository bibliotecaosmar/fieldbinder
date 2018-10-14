<?php
    namespace Model;
    #===================#
    # ==Data of Users== #
    #===================#
    
    class User extends Database
    {
        protected $nickname;
        protected $email;
        protected $born;

        public function showProfile($nickname){
            
        }
        
        public function showValidateData(){}

        public function submitData(){}
        
        public function reviseData(){}
    }