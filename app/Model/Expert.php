<?php
    namespace App\Model;
    #============================#
    # ==Vonlunty Profissionals== #
    #============================#
    
    class Expert extends Database
    {
        private $nickname;
        private $pic;
        private $email;
        private $born;
        private $name;
        private $diploma;
        
        public function showProfile(){
            return self::selectValues('user', 'nickname', $user);
        }

        public function submitData(){
            $awaitData = ['spiece', 'kingdom', 'habitat', 'commonName', 'pic', 'status', 'author'];
            foreach($awaitData as $data){
                if($spiece[$data]){
                    array_push($where, $data);
                    array_push($values, $spiece);
                }
            }
            $where = implode(',', $where);
            $values = implode(',', $values);
            
            if(self::checkValues('spiecies', $spiece['name'], 'commonName')){
                return self::updateValues('spiecies', $values, $where);
            }
            return self::insertValues('spiecies', $values, $where);
        }

        public function reportPic(FileOperator $operator, $pic){
            if($operator->countPicReport($pic)){
                return $operator->deletePic($pic);
            }
        }
    }
