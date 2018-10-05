<?php
    namespace Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public function loadView($view , $exception){
            //load view
            try{
                require_once ROOT . VIEW . $view . '.php';
            }catch(Exception $e){
                return $exception->showMessage($exception('warning' , 'Page' , 'Not found'));
            }
        }
    }