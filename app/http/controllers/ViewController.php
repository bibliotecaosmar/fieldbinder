<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        public $index;
        public $plant;
        public $animal;
        public $insect;
        public $mushroom;
        public $guide;
        public $ourproposal;

        private function setLanguage($language){
            $this->index = $laguange->index;
            $this->plant = $language->plant;
            $this->animal = $language->animal;
            $this->insect = $language->insect;
            $this->mushroom = $language->mushroom;
            $this->guide = $language->guide;
            $this->ourproposal = $language->ourproposal;
        }
        public function selectLanguage($language){
            switch($language){
                case 'pt-br':
                    $language = new Portuguese;
                    $this->setLanguage($language);
                case 'en':
                    $language = new English;
                    $this->setLanguage($language);
                default:
                    $language = new English;
                    $this->setLanguage($language);
            }
        }

        //interface that load account elements
        public function catchLanguage(){
            require_once ROOT . VIEW . HEAD;
            require_once ROOT . VIEW . LANG . 'require_lang.php';
            exit();
        }

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