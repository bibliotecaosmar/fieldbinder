<?php
    namespace App\Model;
    #============================#
    # ==Vonlunty Profissionals== #
    #============================#
    
    class Expert extends Database implements User
    {
        private $nickname;
        private $pic;
        private $email;
        private $born;
        private $name;
        private $diploma;
        
        public function showVotation(){}

        public function submitData(){}

        public function reportData(){}
    }
