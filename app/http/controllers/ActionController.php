<?php
    namespace App\Http\Controllers;
    #========================#
    # ==Actions Controller== #
    #========================#

    class ActionController implements HandleAction
    {
        public function getAction(){
            return $_POST['action'];
        }
        public function handleAction($user, $action = 'not exist', $acess){
            //Check level of acess in action
            if($acess){
                switch($action){
                    case 'register':
                        break;
                    case 'login':
                        try{
                            $login = new Account();
                            $login->validateUser($_POST['login'], $_POST['password']);
                            $redirect = new Controller();
                            $redirect->directIndex();
                            die();
                        }catch(PDOException $e){
    
                        }
                        break;
                    case 'logout':
                        setcookie('user', NULL);
                        break;
                    case 'vote':
                        break;
                    case 'reportPicture':
                        break;
                    case 'submitData':
                        break;
                    case 'updateProfile':
                        break;
                    case 'deleteAccount':
                        break;
                    case 'not exist';
                        return NULL;
                    default:
                        return 'action not avoid';
                }
            }
        }
    }