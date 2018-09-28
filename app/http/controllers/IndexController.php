<?php
    namespace Http\Controllers;
    #=========================#
    # ==Controller of Index== #
    #=========================#

    class IndexController extends Controller
    {
        public function __construct(){
            $this->model = $this->loadModel();
            $this->loadHome($this->user , $this->model)
        }
        private function loadHome(){
            require HEAD;
            echo $user;
            echo $model;
            require ROOT;
        } 
    }