<?php
    namespace App\Http\Controllers;
    #================#
    # ==Controller== #
    #================#
    
    /*Group in that all recurrent functions used for controllers by encapsuled way*/
    abstract class Controller implements ControllerBehavior
    {
        //get user if is there
        public function getLogged(){
            return $_COOKIE['logged'] ?? 'undefined';
        }
        //Alt between logged and signin/signup buttons
        public function checkUser(ControllerBehavior $user){
            return ($user = 'undefined') ? (require (__DIR__ . SIGN_BUTTON)) : $user;
        }
        //get action if is there
        public function executeAction(){
            //
        }
        //load pages
        public function loadPage(ControllerBehavior $user , ControllerBehavior $view , ControllerBehavior $model){
            if($user = "NULL"){
                return $view;
            }
            if($model = "NULL"){
                return $user . $view;
            }
            return $user . $view . $model;
        }
        //get login fields if is there, else throw error message and stop script
        public function getLogin(ControllerBehavior $login){
            if(!isset($_POST['user'])||!isset($_POST['password'])){
                exit(new app\exceptions\Exception(01));
            }
            $login->user = $_POST['user'];
            $login->password = $_POST['password'];
            return $login;
        }
        //get required form field if is there, else throw error message and stop script
        public function getRegisterForm(ControllerBehavior $registerForm){
            if(!isset($_POST['email'])||!isset($_POST['password'])||!isset($_POST['nickname'])||!isset($_POST['born'])){
                exit(new Exception(01));
            }
            $registerForm->email = $_POST['email'];
            $registerForm->password = $_POST['password'];
            $registerForm->nickname = $_POST['nickname'];
            $registerForm->born = $_POST['born'];
            $registerForm->name = (isset($_POST['name'])) ? ($_POST['name']) : 'none';
            $registerForm->diploma = (isset($_POST['diploma'])) ? ($_POST['diploma']) : 'none';
        }

    }
 