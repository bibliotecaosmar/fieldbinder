<?php
    namespace App\Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account extends Database
    {
        public $errors;

        public function registeAccount($email, $password, $nickname, $born, $name, $diploma){
            //Validation of values here
            $values = $user . ',' 
                    . $pwd . ',' 
                    . $nickname . ',' 
                    . $born . ',' 
                    . $completeName . ',' 
                    . $diploma;
            $where = 'user, pwd, nickname, born, completeName, diploma';
            return self::insertValues('user', $values, $where);
        }
        public function validateAccount($user, $password){
            //filters
            $values = 'email, pwd';
            $wheres = $user . ',' . $password;
            return self::checkValues('user', $values, (string) $wheres);
        }
        
        public function showAccount($user){
            //filters or not
            return self::selectValues('user', 'nickname', $user);
        }

        public function updateAccount($user, $password, $mod){
            $values = 'email, pwd';
            $wheres = $user . ',' . $password;
            if(self::checkValues('user', $values, $wheres)){
                return updateValues('user', $mod, $user);
            }
            return 'not avoid';
        }
        
        public function delAccount($user, $password){
            //filters
            if(!self::checkValues('user', $password, $user)){
                return 'incorrect password';
            }
            if(self::deleteValues($database, $user)){
                return TRUE;
            }
            return FALSE;
        }
    }