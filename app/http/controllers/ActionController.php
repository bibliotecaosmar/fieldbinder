<?php
    namespace Http\Controllers;
    #========================#
    # ==Actions Controller== #
    #========================#

    class ActionController implements HandleAction
    {
        public function handleAction($user , $action){
            //Check level of acess in action
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
                    }catch(PDOException $e){

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
                default:
                    return 'action not avoid';
                    break;
            }
            return NULL;
        }
    }