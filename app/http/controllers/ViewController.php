<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==View Controller== #
    #=====================#

    class ViewController implements LoadView
    {
        private $language;

        //interface
        public function selectLanguage($language){
            switch($language){
                case 'pt-br':
                    $this->language = new Portuguese();
                    break;
                case 'en':
                    $this->language = new English();
                    break;
                default:
                    $this->language = new Portuguese();
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
                require_once ROOT . VIEW . MENU;
                return;
            }
            require_once ROOT . VIEW . USER_WELCOME;
            require_once ROOT . VIEW . MENU;
        }
        //interface that load view elements
        public function loadView($view){
             $view = ROOT . VIEW . PAGE . $view . '.php';
            if(file_exists($view)){
                require_once $view;
            }
        }
        //interface that load model elements
        public function loadModel($model){
            if(is_array($model)){
                foreach($model as $models){
                    require ROOT . VIEW . MODEL;
                }
                return;
            }
            require_once ROOT . VIEW . EXCEPTION;
        }
        //interface that load action elements
        public function loadAction($action){
            if(is_array($action)){
                foreach($action as $actions){
                    require ROOT . VIEW . MODEL;
                }
                return;
            }
            require_once ROOT . VIEW . EXCEPTION;
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