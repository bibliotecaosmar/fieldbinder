<?php
    namespace http\middleware;

    #=========================#
    # ==Filter of the Login== #
    #=========================#

    interface FilterRegister
    {   
        function filterRegister($user , $password){
            //
        }
    }