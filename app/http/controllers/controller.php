<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#
    
    /*Group in that all recurrent functions used for controllers by encapsuled way*/
    abstract class Controller implements ControllerLogin, ControllerView, ControllerForm
    {
        /*get user if is there*/
        public function getLogged(){
            return $_COOKIE['logged'] ?? 'undefined';
        }
        /*Alt between logged and signin/signup buttons*/
        public function checkUser(ControllerLogin $user){
            return ($user = 'undefined') ? (require (__DIR__ . SIGN_BUTTON)) : $user;
        }
        /*get login fields if is there, else throw error message and stop script*/
        public function getLogin(ControllerLogin $login){
            if(!isset($_POST['user'])||!isset($_POST['password'])){
                exit(new app\exceptions\Exception(01));
            }
            $login->user = $_POST['user'];
            $login->password = $_POST['password'];
            return $login;
        }
        ///////////////////////////////////////// X X X /////////////////////////////////////////
        /*load view*/
        public function loadView(ControllerView $user , ControllerView $view , ControllerView $model){
            if($user = "NULL"){
                return $view;
            }
            if($model = "NULL"){
                return $user . $view;
            }
            return $user . $view . $model;
        }
        /*get required form field if is there, else throw error message and stop script*/
        public function getRegisterForm(ControllerForm $form){
            if(!isset($_POST['email'])||!isset($_POST['password'])||!isset($_POST['nickname'])||!isset($_POST['born'])){
                exit(new Exception(01));
            }
            $form->email = $_POST['email'];
            $form->password = $_POST['password'];
            $form->nickname = $_POST['nickname'];
            $form->born = $_POST['born'];
            $form->name = (isset($_POST['name'])) ? ($_POST['name']) : 'none';
            $form->diploma = (isset($_POST['diploma'])) ? ($_POST['diploma']) : 'none';
        }
        ///////////////////////////////////////// X X X /////////////////////////////////////////
        /*get action if is there*/
        public function executeAction(){
            //
        }
    }
 