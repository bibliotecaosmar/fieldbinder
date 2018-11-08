<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        private $index;
        private $plant;
        private $animal;
        private $insect;
        private $mushroom;
        private $guide;
        private $ourproposal;

        private $signin;
        private $signup;
        private $or;

        private function setLanguage($lang){
            $this->index = $lang->index;
            $this->plant = $lang->plant;
            $this->animal = $lang->animal;
            $this->insect = $lang->insect;
            $this->mushroom = $lang->mushroom;
            $this->guide = $lang->guide;
            $this->ourproposal = $lang->ourproposal;

            $this->signin = $lang->signin;
            $this->signup = $lang->signup;
            $this->or = $lang->or;
        }

        public function selectLanguage($language){
            switch($language){
                case 'pt-br':
                    $lang = new Portuguese;
                    $this->setLanguage($lang);
                    break;
                case 'en':
                    $lang = new English;
                    $this->setLanguage($lang);
                    break;
                default:
                    $lang = new Portuguese;
                    $this->setLanguage($lang);
                    break;
            }
        }

        //interface that load account elements
        public function catchLanguage(){
            require_once ROOT . VIEW . HEAD;
            require_once ROOT . VIEW . LANG . 'require_lang.php';
            die();
        }

        public function loadAccount($user){
            if($user = 'undefined'){
                require_once ROOT . VIEW . SIGN_BUTTON;
                return;
            }
            require_once ROOT . VIEW . USER_WELCOME;
        }
        //interface that load view elements
        public function loadView($view){
            //load view
            $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)){
                require_once $view;
            }
        }
        //interface that load model elements
        public function loadModel($model){
            //code
            foreach($model as $models){
                require ROOT . VIEW . MODEL;
            }
        }
        //interface that load action elements
        public function loadAction($action = NULL){
            //code
            /*if(is_array($action)){
                echo "<h5 id=\"" . array_key_first($action) . "\">" . array_key_first($action) . "\</h5><br>";
                echo "<p>" . array_key_first($action) . "</p><br>";
            }*/
            require_once ROOT . VIEW . ACTION;
        }
    }