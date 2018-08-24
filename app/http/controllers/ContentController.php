<?php
    namespace app\http\controllers;
    #========================#
    # ==Content Controller== #
    #========================#

    class ContentController extends IndexController
    {
        $model;
        
        public function __construct($view){
            IndexController::$user = IndexController::getLogged()
            IndexController::$user = IndexController::checkUser();
            IndexController::$view = $view;
            IndexController::$view = $this->loadView();
            loadContentPage();
        }

        private function loadView($view){
            switch($view){
                case 'plant':
                    return require_once (__DIR__ . ROOT . VIEW . PLANT);
                    break;
                case 'animal':
                    return require_once (__DIR__ . ROOT . VIEW . ANIMAL);
                    break;
                case 'insect':
                    return require_once (__DIR__ . ROOT . VIEW . INSECT);
                    break;
                case 'mushroom':
                    return require_once (__DIR__ . ROOT . VIEW . MUSHROOM);
                    
            }
        }
        //Load pages with content
        private function loadContentPage(IndexController $user , IndexController $view){

        }
    }