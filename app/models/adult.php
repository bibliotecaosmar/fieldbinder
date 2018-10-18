<?php
    namespace Model;
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
        
        public function showValidateData(){}
        
        public function submitData(){}
        
        public function reportData(){}
    
    }