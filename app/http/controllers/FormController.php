<?php
    namespace app\http\controller;
    #==========================================#
    # ==Controller of Forms for Include Data== #
    #==========================================#

    class FormController
    {
        private $user;
        private $view;

        public function __construct($view){
            $this->user = ControllerBehavior::getLogged();
            $this->view = $view;
            $this->loadView();
            ControllerBehavior::loadPage($user , $view);
        }

        private function loadView($view){
            switch($view){
                case 'plantForm':
                    return $view = require_once (__DIR__ . ROOT . VIEW . PLANT_FORM);
                    break;
                case 'animalForm':
                    return $view = require_once (__DIR__ . ROOT . VIEW . ANIMAL_FORM);
                    break;
                case 'insectForm':
                    return $view = require_once (__DIR__ . ROOT . VIEW . INSECT_FORM);
                    break;
                case 'mushroomForm':
                    return $view = require_once (__DIR__ . ROOT . VIEW . MUSHROOM_FORM);
                    break;
            }
        }
    }