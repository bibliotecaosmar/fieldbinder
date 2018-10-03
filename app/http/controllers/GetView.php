<?php
    namespace Http\Controllers;
    #==============#
    # ==Get View== #
    #==============#

    interface GetView
    {
        public function getView($user , $request);
    }