<?php
    namespace App\Http\Controllers;
    #========================#
    # ==Actions Controller== #
    #========================#

    class ActionController implements HandleAction
    {
        public function handleAction($user, $action = 'not exist'){
            //Check level of acess in action
            switch($action){
                case 'register':
                    $register = new Account();
                    $filter = new UserInput();
                    if(!$filter->filteRegister($_POST['email'], $_POST['password'], $_POST['nickname'], $_POST['born'])){
                        return $filter->error;
                    }
                    return $register->registeAccount();
                case 'login':
                    $login = new Account();
                    $filter = new UserInput();
                    if(!$login->filteLogin($_POST['login'], $_POST['password'])){
                        return $filter->error;
                    }
                    //set view and others values
                    header('index.php');
                case 'logout':
                    setcookie('code', NULL);
                    setcookie('user', NULL);
                    //set view and others values
                    header('index.php');
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