<?php
    namespace App\Http\Filter;
    #===================#
    # ==Validate Data== #
    #===================#

    interface ValidateData
    {
        public function validateDataForm($form);
    }