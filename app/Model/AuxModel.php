<?php
    namespace App\Model;
    #==============#
    #== AuxModel ==#
    #==============#

    class AuxModel
    {
        //check acess level of model
        public function setModelUser($user){
            switch($user){
                case 'adm':
                    return new Adm;
                case 'adult':
                    return new Adult;
                case 'expert':
                    return new Expert;
                case 'user':
                    return new User;
                default:
                    return 'undefined';
            }
        }
    }