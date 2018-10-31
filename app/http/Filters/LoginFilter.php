<?php
    namespace App\Http\Filter;
    #==========================#
    # ==Validation for Login== #
    #==========================#

    interface LoginFilter
    {
        public function filteLoginInput($email, $password);
    }