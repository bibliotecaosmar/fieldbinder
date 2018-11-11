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
        public function loadView($view, $acessLevel){
            //load view
            if(!$acessLevel){
                require_once ROOT . VIEW . NOT_AVOID;
                return;
            }
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