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
        public function loadView($view, $acess, $exception){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)||$acess){
                require_once $view;
            }
        }
        //interface that load model elements
        public function loadModel($model, $acess){
            if($acess){
                foreach($model as $models){
     
                }
            }   
        }
        //interface that load action elements
        public function loadAction($action, $exception){

        }
    }