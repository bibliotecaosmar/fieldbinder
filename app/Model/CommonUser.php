<?php
    namespace App\Model;
    #=================#
    # ==Common User== #
    #=================#

    class CommonUser extends Database implements User
    {
        protected $nickname;
        protected $pic;
        protected $email;
        protected $born;
        
        public function showVotation(){}

        public function submitData(){}
        
        public function reviseData(){}
    }