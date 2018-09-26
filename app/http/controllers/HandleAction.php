<?php
    namespace Http\Controllers;
    #==================================#
    # ==Handler of Actions Interface== #
    #==================================#

    interface HandleAction
    {
        public function handleAction($action);
    }