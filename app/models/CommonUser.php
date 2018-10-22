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
            $conn = self::databaseConnection();
            $conn->prepare("SELECT (nickname, ) FROM user WHERE :nickname");
            $profile = $conn->fetch(":nickname", $nickname);
            if($conn->execute()){
                return $profile;
            }
            return FALSE;
        }
        
        public function showVotation(){}

        public function submitData(){}
        
        public function reviseData(){}
    }