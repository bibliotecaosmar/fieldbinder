<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#

    class Controller
    {
        private $user;
        private $view;
        private $model;

        public function __construct($user , $view , $model){
            $this->user = $user;
            $this->view = $view;
            $this->model = $model;
        }

        public function loadView($user , $view , $model){
            $user = ($user = 'undefined') ? (ROOT . SIGN_BUTTON) : $user;
            $view = GetView::getView($view);
            $model = GetView::getModel($model);
            echo require_once HEAD;
            echo require_once $user;
            echo require_once $view;
            echo require_once FOOT;
        }
    }