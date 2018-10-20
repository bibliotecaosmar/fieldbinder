<?php
    namespace App\Http\Controllers;
    #===============#
    # ==Load View== #
    #===============#

    interface LoadView
    {
        public function loadAccount($user);
        public function loadView($view, $exception);
        public function loadAction($action, $exception);
        public function loadModel($model, $exception);
    }