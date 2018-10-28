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
            $conn = self::databaseConnection();
            $conn->prepare("INSERT INTO user(user, pwd, nickname, born, completeName, diplome) VALUE(:user, :pwd, :nickname, :born, :completeName, :diploma)");
            $conn->bindValue(":user", $email);
            $conn->bindValue(":pwd", $password);
            $conn->bindValue(":nickname", $nickname);
            $conn->bindValue(":born", $born);
            $conn->bindValue(":completeName", $name);
            $conn->bindValue(":diplome", $diplome);
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }
        public function validateAccount($user, $password){
            $conn = self::databaseConnection();
            $conn->prepare("SELECT * FROM user WHERE user = :user AND pass = :pass");
            $conn->bindValue(":user", $user);
            $conn->bindValue(":pass", $password);
            if($conn->excecute()){
               return TRUE; 
            }
            return FALSE;
        }
        
        public function showAccount($user){
            //filters or not
            $profile = self::selectRow('user', 'nickname', $user);
            return $profile;
        }
        
        public function delAccount($user, $password){
            $conn = self::databaseConnection();
            $conn->prepare("DELETE * FROM user WHERE (user = :user) AND (pwd = :pwd)");
            $conn->bindValue(":user", $user);
            $conn->bindValue(":pwd", $password);
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }

        public function updateAccount($user, $password){
            
        }
    }