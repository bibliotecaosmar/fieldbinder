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
            //filters or not
            return self::selectValues('user', 'nickname', $user);
        }

        public function submitData($spiece){
            $awaitData = ['spiece', 'kingdom', 'habitat', 'commonName', 'pic', 'status', 'author'];
            foreach($awaitData as $data){
                if($spiece[$data]){
                    array_push($where, $data);
                    array_push($values, $spiece);
                }
            }
            $where = implode($where, ',');
            $values = implode($values. ',');
            
            if(self::checkValues('spiecies', $spiece['name'], 'commonName')){
                self::updateValues('spiecies', $values, $where);
                return;
            }
            self::insertValues('spiecies', $values, $where);
        }

        public function vote($spiece){}
    }