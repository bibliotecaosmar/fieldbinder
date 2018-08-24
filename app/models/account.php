<?php
    namespace app\model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account
    {
        private $conn = new PDO("mysql:host=localhost;dbname=account" , "root" , "");
        private $user;
        private $password;

        function registeAccount($email , $password , $nickname , $born , $name , $diploma){}
        
        function validateAccount($user, $password){
            try{
                return $pdo->prepare("SELECT * FROM user WHERE ")
            }catch{
                new app\exceptions\Exceptions(001);
            }
        }
        
        function showAccounts($user, $password){}
        
        function delAccount($user, $password){}
        
        function updateAccount($user, $password){}
    }