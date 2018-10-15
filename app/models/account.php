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
            $conn->prepare("SELECT nickname, pic, email, born FROM user WHERE :nickname = $user INTO (:nickname, :pic, :email, :born)");
            $conn->getAttribute(":nickname", $nickname);
            $conn->getAttribute(":pic", $pic);
            $conn->getAttribute(":email", $email);
            $conn->getAttribute(":born", $born);
            if($conn->execute()){
                array_push($profile, $nickname);
                array_push($profile, $pic);
                array_push($profile, $email);
                array_push($profile, $born);
                return $profile;
            }
            return NULL;
        }
        
        public function delAccount($user, $password){

        }

        public function updateAccount($user, $password){}
    }