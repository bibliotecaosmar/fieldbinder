<?php
    namespace App\Model;
    #=========================#
    # ==Executer of Actions== #
    #=========================#

    //aux action execute
    class AuxActionModel
    {
        private $class;
        private $action;

        public function __construct($action){
            //set action for after use
            $this->action = $action;
            //set class action responsable
            if($this->action = 'register'||'login'||'logout'||'updateProfile'||'deleteAccount'){
                $class = new Account;
            }
            if($this->action = 'vote'||'reportPic'||'submitDate'){
                $class = new Spiece;
            }
        }
    }