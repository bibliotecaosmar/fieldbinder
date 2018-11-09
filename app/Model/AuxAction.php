<?php
    namespace App\Model;
    #=========================#
    # ==Executer of Actions== #
    #=========================#

    //aux action execute
    class AuxAction
    {
        public $class;
        public $action;

        public function __construct($action = NULL){
            //set action for after use
            $this->action = $action;
            //set class action responsable
            if($this->action = 'register'||'login'||'logout'||'updateProfile'||'deleteAccount'||'manageAccounts'){
                $class = new Account;
            }
            if($this->action = 'vote'||'reportPic'||'submitDate'){
                $class = new Spiecies;
            }
        }
    }