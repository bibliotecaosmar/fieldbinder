<?php
    namespace Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account
    {
        private $user; //database connection
        private $password;

        public function registeAccount($db, $email, $password, $nickname, $born, $name, $diploma){
            //Validation of values here
        
        }
        public function validateAccount($db, $user, $password){
            $conn = $db->userConnection();
            $conn->prepare("SELECT * FROM user WHERE (:user, :pass)");
            $conn->bindValue(":user", $user);
            $conn->bindValue(":pass", $password);
            if($conn->excecute()){
               return TRUE; 
            }
            return FALSE;
        }
        
        public function showAccount($db, $user){
            $conn = $db->userConnection();
            $conn->prepare("SELECT * FROM user WHERE :user");
            $conn->bindValue(":user", $user);
            $conn->fenchAll();
        }
        
        public function delAccount($db, $user, $password){}

        public function updateAccount($db, $user, $password){}
    }