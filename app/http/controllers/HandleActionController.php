<?php
    namespace Http\Controllers;
    #========================#
    # ==Actions Controller== #
    #========================#

    class HandleActionController implements HandleAction
    {
        public function handleAction(HandleAction $action){
            switch($action){
                case 'register':
                    break;
                case 'login':
                    break;
                case 'logout':
                    break;
                case 'vote':
                    break;
                case 'reportPicture':
                    break;
                case 'submitData':
                    break;
                case 'editProfile':
                    break;
            }
        }
    }