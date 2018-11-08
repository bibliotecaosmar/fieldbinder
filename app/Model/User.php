<?php
    namespace App\Model;
    #=================#
    # ==Common User== #
    #=================#

    class User extends Database
    {
        public $nickname;
        public $pic;
        public $email;
        public $born;
        
        public function showProfile($user){
            return self::selectValues('user', 'nickname', $user);
        }

        public function submitData($spiece){
            //filters...
            self::encodeJson($spiece);
        }

        public function vote($spiece){}
    }