<?php
    namespace App\Http\Controllers;
    #===============#
    # ==Load View== #
    #===============#

    interface LoadView
    {
        public function loadAccount($user);
        public function loadView($view, $accessLevel);
        public function loadAction($action);
        public function loadModel($model);
    }