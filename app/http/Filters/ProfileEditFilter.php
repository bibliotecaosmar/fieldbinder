<?php
    namespace App\Http\Filter;
    #=================================#
    # ==Validation for Profile Edit== #
    #=================================#

    interface ProfileEditFilter
    {
        public function filteEditInput($edition);
    }