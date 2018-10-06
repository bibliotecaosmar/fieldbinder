<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public function loadView($view){
            //load view
            if(isset(VIEW_LIST[$view])){
                require_once ROOT . VIEW . PAGE . $view . '.php';
                die();
            }
            return array('warning' , 'Page' , 'Not found');
        }
    }