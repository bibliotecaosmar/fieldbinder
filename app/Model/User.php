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
        
        public function showProfile($user){
            //filters or not
            return self::selectValues('user', 'nickname', $user);
        }

        public function submitData($spiece){
            if(isset($spiece[$x])){
                $where = 0;
                $values = 0;
            }
            if(self::checkValues('spiecies', $spiece['name'], 'commonName')){
                self::updateValues('spiecies', $values, $where);
                return;
            }
            self::insertValues('spiecies', $values, $where);
        }

        public function vote($spiece){}
    }