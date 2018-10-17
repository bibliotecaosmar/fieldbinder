<?php
    namespace Model;
    #=================#
    # ==Common User== #
    #=================#

    class CommonUser extends Database implements User
    {
        protected $nickname;
        protected $pic;
        protected $email;
        protected $born;

        public function showProfile($nickname){
            
        }
        
        public function showValidateData(){}

        public function submitData(){}
        
        public function reviseData(){}
    }