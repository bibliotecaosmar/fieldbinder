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
                //code
            }
            return 'undefined';
        }
        //Check acess level of view
        public function checkAcessLevelView($user, $view){
            //check if exist permission than from user as from view
            switch($view){
                case 'manageUsers':
                    $user = $this->checkUser();
                    if($user = 'adm'){
                        return $view;
                    }
                    return 'notAvoid';
                case 'profile'||'submitData':
                    if($user != 'undefinided'){
                        return $view;
                    }
                    return 'notAvoid';
                default:
                    return $view;
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
    }