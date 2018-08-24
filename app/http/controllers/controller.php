<?php
    namespace app\http\controllers;
    #================#
    # ==Controller== #
    #================#
    
    abstract class Controller implements ControllerBehavior
    {
        public function getLogged(){
            return (isset($_COOKIE['logged'])) ? ($_COOKIE['logged']) : 'undefined';
        }

        public function getAction(){
            return (isset($_POST['action'])) ? ($_POST['action']) : 'none';
        }

        public function getLogin(ControllerBehavior $login){
            if(!isset(($_POST['user'])||($_POST['password'])){
                exit(new app\exceptions\Exception(01));
            }
            $login->user = $_POST['user'];
            $login->password = $_POST['password'];
            return $login;
        }

        public function getRegisterForm(ControllerBehavior $registerForm){
            if(!isset(($_POST['email'])||$_POST['password']||$_POST['nickname']||$_POST['born'])){
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
 