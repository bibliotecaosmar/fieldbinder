<?php
    namespace App\Http\Filter;
    #==========================#
    # ==Validate of New User== #
    #==========================#

    interface ValidateRegister
    {
        public function validateFormRegister();
        public function standsValidateDatas($form);
    }