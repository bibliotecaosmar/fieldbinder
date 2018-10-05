<?php
    namespace App\Http\Controllers;
    #==================================#
    # ==Handler of Actions Interface== #
    #==================================#

    interface HandleAction
    {
        public function handleAction($user , $action);
    }