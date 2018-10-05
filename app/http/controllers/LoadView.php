<?php
    namespace App\Http\Controllers;
    #===============#
    # ==Load View== #
    #===============#

    interface LoadView
    {
        public function loadView($view);
    }