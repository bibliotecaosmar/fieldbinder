<?php
    namespace App\Model;
    #===========#
    #  ==Adm==  #
    #===========#
    
    class Adm extends Database
    {
        private $nickname;
        private $pic;
        private $email;
        private $born;
        private $name;
                
        public function showProfile(){
            return self::selectValues('user', 'nickname', $user);
        }
        public function manageAccounts($manage){
            foreach($manage as $account){
                switch($account['action']){
                    case 'update':
                        $values = $account['values'];
                        $where = $account['where'];
                        self::updateValues('user', $values, $where);
                    case 'delete':
                        $values = $account['email'];
                        self::deleteValues('user', $values, 'email');
                }   
            }
        }
        public function manageSpiecies(){}
    }