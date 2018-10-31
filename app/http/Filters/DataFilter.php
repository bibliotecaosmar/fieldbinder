<?php
    namespace App\Http\Filter;
    #===================#
    # ==Validate Data== #
    #===================#

    interface DataFilter
    {
        public function filteDataForm($form);
    }