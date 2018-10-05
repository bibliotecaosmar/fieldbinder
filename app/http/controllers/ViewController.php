<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public function loadView($view){
            //load view
            try{
                require_once ROOT . VIEW . PAGE . $view . '.php';
            }catch(Exception $e){
                return $exception->showMessage($exception('warning' , 'Page' , 'Not found'));
            }
        }
    }