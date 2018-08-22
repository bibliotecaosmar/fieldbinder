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
        protected $born;

        function __contruct($nickname , $email , $born){
            $this->nickname = $nickname;
            $this->email = $email;
            $this->born = $born;
        }

        function submitData(){}
        
        function reviseData(){}
    }