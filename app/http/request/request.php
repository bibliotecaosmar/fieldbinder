<?php
    namespace Http\Request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements AcessLevel
    {
        //Check acess level of view
        public function checkAcessLevelView($user, $view){
            //check if exist permission than from user as from view
            switch($view){
                case ['editUsers']:
                    $account = new Account;
                    if($user = $account-> ) ;
                    return 0;
                case ['profile']:
                    if($user != 'undefinided'){
                        return 1;
                    }
                    return 0;
                case ['submitData']:
                    if($user != 'undefinided'){
                        return 1;
                    }
                    return 0;
                default:
                    return 1;
            }
        }
        //check acess level of action
        public function checkAcessLevelAction(AcessLevel $user , AcessLevel $action){
            //check if exist action option and acess level
            switch($action){
                case ['']:
                    return;
            }
        }
    }