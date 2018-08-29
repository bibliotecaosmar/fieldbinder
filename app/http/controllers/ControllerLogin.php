<?php
    namespace App\Http\Controllers;
    #======================#
    # ==Controller Login== #
    #======================#

    interface ControllerLogin
    {
        public function getLogged();
        public function checkUser($user);        
        public function getLogin($login);
    }