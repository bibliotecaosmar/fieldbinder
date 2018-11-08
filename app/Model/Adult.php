<?php
    namespace App\Model;
    #=================#
    # ==Adult Users== #
    #=================#
    
    class Adult extends Database
    {
        protected $nickname;
        protected $pic;
        protected $email;
        protected $born;
        protected $name;
        
        public function showVotation(){
            return self::selectValues('user', 'nickname', $user);
        }
        
        public function submitData(){}
        
        public function reportPicture(){}
    
    }