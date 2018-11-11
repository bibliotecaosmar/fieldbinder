<?php
    namespace App\Model;
    #=========================#
    # ==Executer of Actions== #
    #=========================#

    //aux action execute
    class Transporter
    {
        public $action;
        public $user;
        private $account;
        private $spiecies;

        public function __construct($user = NULL){
            //set action for after use
            $this->account = new Account;
            $this->spiecies = new Spiecies;
            switch($user){
                case 'adm':
                    $this->user = new Adm;
                case 'adult':
                    $this->user = new Adult;
                case 'expert':
                    $this->user = new Expert;
                case 'user':
                    $this->user = new User;
                default:
                    $this->user = 'undefined';
            }
        }

        public function getClassAction($query){
            //set class action responsable
            if($query = 'register'||'login'||'logout'||'updateProfile'||'deleteAccount'||'manageAccounts'){
                $account = new Account;
            }
            if($query = 'vote'||'reportPic'||'submitDate'){
                $spiecies = new Spiecies;
            }
        }
    }