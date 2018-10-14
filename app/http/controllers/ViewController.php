<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public function loadAccount($user){
            if($user = 'undefined'){
                require_once ROOT . VIEW . SIGN_BUTTON;
            }else{
                echo $user;
            }
        }

        public function loadView($view, $acess){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)||$acess){
                require_once $view;
            }
        }
    }