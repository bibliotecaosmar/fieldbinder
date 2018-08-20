<?php
    <?php
    namespace \app\model;
    #===================#
    # ==Data of Users== #
    #===================#
    
    class User
    {
        protected $nickname;
        protected $email;
        protected $age;

        function __contruct($nickname,$email,$age){
            $this->nickname = $nickname;
            $this->email = $email;
            $this->age = $age;
        }

        function submitData(){}
        
        function reviseData(){}
    }