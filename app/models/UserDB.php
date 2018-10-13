<?php
    namespace Model;
    #=======================#
    # ==Database Operator== #
    #=======================#

    interface UserDB
    {
        public function userConnection();
        public function secureAcess($user, $password);
    }