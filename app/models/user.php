<?php
    namespace Model;
    #===================#
    # ==Data of Users== #
    #===================#
    
    class User
    {
        protected $nickname;
        protected $email;
        protected $born;

        public function __contruct($nickname , $email , $born){
            $this->nickname = $nickname;
            $this->email = $email;
            $this->born = $born;
        }

        public function submitData(){}
        
        public function reviseData(){}
    }