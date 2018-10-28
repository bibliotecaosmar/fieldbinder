<?php
    namespace App\Model;
    #=================#
    # ==Adult Users== #
    #=================#
    
    class Adult extends Database implements User
    {
        protected $nickname;
        protected $pic;
        protected $email;
        protected $born;
        protected $name;

        public function showProfile(){}
        
        public function showVotation(){}
        
        public function submitData(){}
        
        public function reportPicture(){}
    
    }