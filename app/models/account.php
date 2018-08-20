<?php
    namespace \app\model;
    #=============#
    # ==Account== #
    #=============#
    
    class Account
    {
        private $user;
        private $password;
        private $userType;

        function registeAccount($email, $password, $nickname, $age, $completeName, $diploma,){}
        
        function validateAccount($user, $password){}
        
        function showAccounts($user, $password){}
        
        function delAccount($user, $password){}
        
        function updateAccount($user, $password){}
    }