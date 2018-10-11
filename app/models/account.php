<?php
    namespace Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account
    {
        private $user; //database connection
        private $password;

        public function registeAccount($email, $password, $nickname, $born, $name, $diploma){
            //Validation of values here
            try{
                $register = $conn->prepare("INSERT INTO user (email, pass, nickname, born, userName, diploma) VALUE ($email , $password , $nickname , $born , $name , $diploma)");
                $register->execute();
            }catch(\PDOException $e){
                throw $e->getMessage();
            }
        }
        
        public function validateAccount($user, $password){
            try{
                $validate = $conn->prepare("SELECT * FROM user WHERE (:user, :pass)");
                $validate->bindValue(":user", $user);
                $validate->bindValue(":pass", $password);
                if($validate->execute()){
                    $setcookie = $conn->prepare("SELECT * FROM user WHERE :user");
                    $setcookie->bindParam(":nickname", $user);
                    setcookie('user', $user);
                }
            }catch(\PDOException $e){
                throw $e->getMessage();
            }
        }
        
        public function showAccounts($user, $password){}
        
        public function delAccount($user, $password){}

        public function updateAccount($user, $password){}
    }