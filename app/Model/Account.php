<?php
    namespace App\Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account extends Database
    {
        private $user; //database connection
        private $password;

        public function registeAccount($email, $password, $nickname, $born, $name, $diploma){
            //Validation of values here
            $values = [
                $user, $pwd, $nickname, $born, $completeName, $diploma
            ];
            $where = [
                'user', 'pwd', 'nickname', 'born', 'completeName', 'diploma'
            ];
            return self::insertValues('user', $values, $where);
        }
        public function validateAccount($user, $password){
            //filters
            $values = ['email', 'pwd'];
            array_push($wheres, $user);
            array_push($wheres, $password);
            return self::checkValue('user', $values, $wheres);
        }
        
        public function showAccount($user){
            //filters or not
            return self::selectRow('user', 'nickname', $user);
        }

        public function updateAccount($user, $password, $mod){
            $values = ['email', 'pwd'];
            array_push($wheres, $user);
            array_push($wheres, $password);
            if(self::checkValue('user', $values, $wheres)){
                return updateValue('user', $mod, $user);
            }
            return 'not avoid';
        }
        
        public function delAccount($user, $password){
            //filters
            if(!self::checkValue('user', $password, $user)){
                return 'incorrect password';
            }
            if(self::deleteValue($database, $user)){
                return TRUE;
            }
            return FALSE;
        }

    }