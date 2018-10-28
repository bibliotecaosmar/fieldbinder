<?php
    namespace App\Http\Controllers;
    #=======================#
    #== Action Controller ==#
    #=======================#

    class ActionController
    {
        public function handleAction($user, $action = NULL, $class){
            switch($this->action){
                case 'register':
                    return $class->registeAccount($_POST['newNickname'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newBorn'], $_POST['newName'], $_POST['newDiploma']);
                case 'login':
                    //set view and others values
                    header('index.php');
                case 'logout':
                    setcookie('code', NULL);
                    setcookie('user', NULL);
                    //set view and others values
                    header('index.php');
                case 'updateProfile': 
                    return $update->updateAccount($request->checkUser(), $_POST['password'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newName'], $_POST['newDiploma']);
                case 'deleteAccount':
                    return $delete->deleteAccount($request->checkUser(), $_POST['password']);
                case 'vote':
                    $spiece->setVote($spiece->validateVote($_POST['spiece'], $_POST['option']));
                    return TRUE;
                case 'reportPicture':
                    //NEW CLASS ??
                case 'submitData':
                    //$user = new 
                    //$spiece->
                case NULL;
                    return NULL;
                default:
                    return 'action not avoid';
            }
        }
    }