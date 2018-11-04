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

        private function setLanguage($language){
            $this->index = $language->index;
            $this->plant = $language->plant;
            $this->animal = $language->animal;
            $this->insect = $language->insect;
            $this->mushroom = $language->mushroom;
            $this->guide = $language->guide;
            $this->ourproposal = $language->ourproposal;

            $this->signin = $language->signin;
            $this->signup = $language->signup;
            $this->or = $language->or;
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
                    $language = new Portuguese;
                    $this->setLanguage($language);
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
            }else{
                require_once ROOT . VIEW . USER_WELCOME;
            }
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
            require_once ROOT . VIEW . MODEL;
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