<?php
    namespace Http\Filter;
    #==========================#
    # ==Validation for Login== #
    #==========================#

    interface LoginFilter
    {
        public function filteLoginInput($email, $password);
    }