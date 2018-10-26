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
                    if(!$filter->filteRegister($_POST['newNickname'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newBorn'], $_POST['newName'], $_POST['newDiploma'])){
                        return $filter->error;
                    }
                    return $register->registeAccount($_POST['newNickname'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newBorn'], $_POST['newName'], $_POST['newDiploma']);
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
                    $spiece = new Spieces;
                    $spiece->setVote($spiece->validateVote($_POST['spiece'], $_POST['option']));
                    return TRUE;
                case 'reportPicture':
                    //NEW CLASS ??
                case 'submitData':
                    //$user = new 
                    $spiece = new Spieces;
                    //$spiece->
                case 'updateProfile':
                    $update = new Account();
                    $request = new Request();
                    $filter = new UserInput();
                    if(!$filter->filteRegister($_POST['newNickname'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newBorn'], $_POST['newName'], $_POST['newDiploma'])){
                        return $filter->error;
                    } 
                    return $update->updateAccount($request->checkUser(), $_POST['password'], $_POST['newEmail'], $_POST['newPassword'], $_POST['newName'], $_POST['newDiploma']);
                case 'deleteAccount':
                    $delete = new Account();
                    $request = new Request();
                    return $delete->deleteAccount($request->checkUser(), $_POST['password']);
                case 'not exist';
                    return NULL;
                default:
                    return 'action not avoid';
            }
        }
    }