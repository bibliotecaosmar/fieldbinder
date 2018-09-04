<?php
    namespace App\Http\Request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements AcessLevel
    {
        //Check acess level
        public function checkAcessLevel(AcessLevel $user, AcessLevel $view, AcessLevel $action){
            array_push($acess, $action);
            array_push($acess, $user);
            array_push($acess, $view);
            //check if exist permission than from user as from view
            switch($acess){
                case ['']:
                    return 1;
                case ['']:
                    return 1;
                case ['']:
                    return 1;
                case ['']:
                    return 1;
                default:
                    return 0;
            }
        }
    }