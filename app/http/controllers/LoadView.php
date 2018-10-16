<?php
    namespace App\Http\Controllers;
    #===============#
    # ==Load View== #
    #===============#

    interface LoadView
    {
        public function loadAccount($user);
        public function loadView($view);
        public function loadModel($model);
        public function loadAction($action);
    }