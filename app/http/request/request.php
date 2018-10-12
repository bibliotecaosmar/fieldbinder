<?php
    namespace App\Http\Request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements AcessLevel
    {
        //Check acess level of view
        public function checkAcessLevelView($user, $view){
            //check if exist permission than from user as from view
            switch($view){
                case 'editUsers':
                    $account = new Account;
                    if($user = 'adm'){
                        return 1;
                    }
                    return 0;
                case 'profile':
                    if($user != 'undefinided'){
                        return 1;
                    }
                    return 0;
                case 'submitData':
                    if($user != 'undefinided'){
                        return 1;
                    }
                    return 0;
                default:
                    return 1;
            }
        }
        //check acess level of action
        public function checkAcessLevelAction($user, $action){
            //check if exist action option and acess level
            switch($action){
                case 'updateProfile'||'deleteProfile':
                    $user = $account->checkUser($user);
                    if($user = 'adm'){
                        //check user and password in an interface of the Account Class
                    }
                    return 0;
                case 'reportPicture':
                    if($user = $this->confirmeAdm()){
                        return 1;
                    }
                    return 0;
                default:
                    if($user != 'undefined'){
                        return 1;
                    }
                    return 0;
            }
        }
        //check acess level of model
        public function checkAcessLevelModel($user, $view){
            
        }
    }