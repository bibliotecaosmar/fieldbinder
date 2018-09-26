<?php
    namespace Http\Filter;
    #=================================#
    # ==Validation for Profile Edit== #
    #=================================#

    interface ValidateProfileEdit
    {
        public function validateEditInput($edition);
    }