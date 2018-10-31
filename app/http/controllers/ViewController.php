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
        public function loadView($view){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)){
                require_once $view;
            }else{
                $exception->showMessage('Not found');
            }
        }
        //interface that load model elements
        public function loadModel($model, $i = 0){
            if(isset($model[$i])){
                $models = array_swift($model[$i]);
                echo "<h5 id=$models>";                
                foreach($model[$i] as $models){
                    echo "<p>$models</p><br>";
                }
                echo "</h5><br>";
                self::loadModel($model[$i+1]);
            }
        }
        //interface that load action elements
        public function loadAction($action = NULL){
            if(is_array($action)){
                echo "<h5 id=\"" . array_key_first($action) . "\">" . array_key_first($action) . "\</h5><br>";
                echo "<p>" . array_key_first($action) . "</p><br>";
            }
        }
    }