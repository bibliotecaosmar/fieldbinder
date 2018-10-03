<?php
    namespace Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements GetView , LoadView
    {
        public function getView($user , $request){
            $view = $_POST['view'] ?? 'index';
            //Check acess level of view
            if(!$request->checkAcessLevelView($user , $view)){
                return $view = 'Page no avoid ';
            }
            return $view;
        }
        public function loadView($view){
            //load view
            if($view = 'Page no avoid'){
                require ROOT . VIEW . OPENTAGWARNING;
                echo $view;
                require ROOT . VIEW . CLOSETAG;
                exit();
            }
            require_once ROOT . VIEW . $view . '.php';
        }
    }