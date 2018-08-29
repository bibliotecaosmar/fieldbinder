<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Controller View== #
    #=====================#

    interface ControllerView
    {
        public function loadView($view , $user , $model);
    }