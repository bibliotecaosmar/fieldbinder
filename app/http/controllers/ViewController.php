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

        private $creater;

        private $indexBody;

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

            $this->creater = $lang->creater;

            $this->indexBody = $lang->indexBody;

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
            exit();
        }
        //define welcomes/sign buttons
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
            if(isset($model['id'], $model['label'])){
                foreach($model as $models){
                    require ROOT . VIEW . MODEL;
                }
            }
        }
        //interface that load action elements
        public function loadAction($action){
            //code
            if(isset($action['id'], $model['label'])){
                require_once ROOT . VIEW . ACTION;
            }
        }
        //interface that load head element
        public function loadHead(){
            require_once ROOT . VIEW . HEAD;
        }
        //interface that load foot element
        public function loadFoot(){
            require ROOT . VIEW . FOOT;
        }
    }