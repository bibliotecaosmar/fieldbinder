<?php
    namespace Http\Filter;
    #==========================#
    # ==Validation for Login== #
    #==========================#

    interface ValidateLogin
    {
        public function validateLoginInput($email, $password);
    }