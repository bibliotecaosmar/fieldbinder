<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        //interface that load account elements
        public function loadAccount($user){
            if($user = ''){
                echo "<input type=\"submit\" name=\"signin\" value=\"signin\" >";
                echo "<h4>or</h4>";
                echo "<input type=\"submit\" name=\"signup\" value=\"signup\" >";

            }
            echo $user;
        }
        //interface that load view elements
        public function loadView($view, $exception){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)){
                require_once $view;
            }else{
                $exception->showMessage('Not found');
            }
        }
        //interface that load model elements
        public function loadModel($model, $exception){
            foreach($model as $models){

            }   
        }
        //interface that load action elements
        public function loadAction($action, $exception){

        }
    }