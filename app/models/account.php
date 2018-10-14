<?php
    namespace Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account extends Database
    {
        private $user; //database connection
        private $password;

        public function registeAccount($db, $email, $password, $nickname, $born, $name, $diploma){
            //Validation of values here
        
        }
        public function validateAccount($user, $password){
            $conn = self::databaseConnection();
            $conn->prepare("SELECT * FROM user WHERE (:user, :pass)");
            $conn->bindValue(":user", $user);
            $conn->bindValue(":pass", $password);
            if($conn->excecute()){
               return TRUE; 
            }
            return FALSE;
        }
        
        public function showAccount($user){
            $conn = self::databaseConnection();
            $conn->prepare("SELECT * FROM user WHERE :user");
            $conn->bindValue(":nickname", $nickname);
            $conn->bindValue(":user", $user);
            $conn->execute();
        }
        
        public function delAccount($user, $password){}

        public function updateAccount($user, $password){}
    }