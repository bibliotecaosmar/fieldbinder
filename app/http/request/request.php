<?php
    namespace App\Http\Request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements AcessLevel
    {
        //check usertype
        public function checkUser(){
            if(isset($_POST['code'])){
                //
            }
            return 'undefined';
        }
        //Check acess level of view
        public function checkAcessLevelView($user, $view){
            //check if exist permission than from user as from view
            switch($view){
                case 'editUsers':
                    $user = $this->checkUser();
                    if($user = 'adm'){
                        return TRUE;
                    }
                    return FALSE;
                case 'profile':
                    if($user != 'undefinided'){
                        return TRUE;
                    }
                    return FALSE;
                case 'submitData':
                    if($user != 'undefinided'){
                        return TRUE;
                    }
                    return FALSE;
                default:
                    return TRUE;
            }
        }
        //check acess level of action
        public function checkAcessLevelAction($user, $action){
            //check if exist action option and acess level
            switch($action){
                case 'updateProfile'||'deleteProfile':
                    $user = $this->checkUser();
                    if($user = 'adm'){
                        //check user and password in an interface of the Account Class
                    }
                    return FALSE;
                case 'reportPicture':
                    if($user = $this->confirmeAdm()){
                        return TRUE;
                    }
                    return FALSE;
                default:
                    if($user != 'undefined'){
                        return TRUE;
                    }
                    return FALSE;
            }
        }
        //check acess level of model
        public function checkAcessLevelModel($user){
            switch($user){
                case 'adm':
                    $user = new Adm;
                    return $user;
                case 'adult':
                    $user = new Adult;
                    return $user;
                case 'expert':
                    $user = new Expert;
                    return $user;
                case 'user':
                    $user = new User;
                    return $user;
                default:
                    return NULL;
            }
        }
    }