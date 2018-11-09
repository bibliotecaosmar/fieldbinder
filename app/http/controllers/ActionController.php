<?php
    namespace App\Http\Controllers;
    #=======================#
    #== Action Controller ==#
    #=======================#

    class ActionController
    {
        public function handleAction($user, $action = NULL, $class){
            switch($action){
                case 'register':
                    if($class->registeAccount($_POST['newNickname'], 
                                                $_POST['newEmail'], 
                                                $_POST['newPassword'], 
                                                $_POST['newBorn'], 
                                                $_POST['newName'], 
                                                $_POST['newDiploma'])){
                        //setcookie('code', harsh);s
                        setcookie('user', $_POST['']);
                        $_POST['view'] = 'index';
                    }
                    return $class->errors;
                case 'login':
                    //set view and others values
                    $_POST['view'] = 'index';
                case 'logout':
                    setcookie('code', NULL);
                    setcookie('user', NULL);
                    //set view and others values
                    $_POST['view'] = 'index';                    
                case 'updateProfile': 
                    return $update->updateAccount($request->checkUser(), $_POST['password'], 
                                                                         $_POST['newEmail'], 
                                                                         $_POST['newPassword'], 
                                                                         $_POST['newName'], 
                                                                         $_POST['newDiploma']);
                case 'deleteAccount':
                    return $class->deleteAccount($request->checkUser(), $_POST['password']);
                case 'vote':
                    $class->getVotation($_POST['spiece'], $_POST['option']);
                    return TRUE;
                case 'reportPicture':
                    $class->reportPic($_POST['provisoryIdPic']);
                case 'submitData':
                    $class->submitData($_POST['spiece']);
                case 'manageAccount':
                    //create assoc array bidimensional
                    $class->manageAccounts($manage);
                case NULL;
                    return NULL;
                default:
                    return 'action not avoid';
            }
        }
    }