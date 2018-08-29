<?php
    namespace App\Model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account
    {
        private $conn = new \PDO("mysql:host=localhost;dbname=user","root", ""); //database connection
  
        function registeAccount($email , $password , $nickname , $born , $name , $diploma){
            //Validation of values here
            
            //Insert values in DB
            try{
                $register = $conn->prepare("INSERT INTO user (email , pass , nickname , born , userName , diploma) VALUE ($email , $password , $nickname , $born , $name , $diploma)");
                $register->execute();
            }catch(\PDOException $e){
                return $e->getMessage();
            }
        }
        
        function validateAccount($user, $password){
            try{
                $validate = $conn->prepare("SELECT * FROM user WHERE (:user, :pass)");
                $validate->bindValue(":user" , $user);
                $validate->bindValue(":pass" , $password);
                if($validate->execute()){
                    $setcookie = $conn->prepare("SELECT * FROM user WHERE :user");
                    $setcookie->bindParam(":nickname", $user);
                    setcookie('user') = $user;
                }
            }catch(\PDOException $e){
                return $e->getMessage();
            }
        }
        
        function showAccounts($user, $password){}
        
        function delAccount($user, $password){

        }
        
        function updateAccount($user, $password){}
    }