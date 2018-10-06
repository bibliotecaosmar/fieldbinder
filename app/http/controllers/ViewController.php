<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public function loadView($view){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)){
                require_once $view;
                return NULL;
            }
            return array('warning' , 'Page' , 'Not found');
        }
    }