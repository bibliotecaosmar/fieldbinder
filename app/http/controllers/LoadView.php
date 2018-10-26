<?php
    namespace App\Http\Controllers;
    #===============#
    # ==Load View== #
    #===============#

    interface LoadView
    {
        public function loadAccount($user);
        public function loadView($view);
        public function loadAction($action);
        public function loadModel($model);
    }