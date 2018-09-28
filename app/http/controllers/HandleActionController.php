<?php
    namespace Http\Controllers;
    #========================#
    # ==Actions Controller== #
    #========================#

    class HandleActionController implements HandleAction
    {
        public function handleAction($action){
            switch($action){
                case 'register':
                    break;
                case 'login':
                    try{
                        $login = new Account();
                        $login->validateUser($_POST['login'] , $_POST['password']);
                        $redirect = new Controller();
                        $redirect->directIndex();
                        die();
                    }catch(new /PDOException $e){

                    }
                    break;
                case 'logout':
                    setcookie('user' , NULL);
                    break;
                case 'vote':
                    break;
                case 'reportPicture':
                    break;
                case 'submitData':
                    break;
                case 'editProfile':
                    break;
            }
        }
    }