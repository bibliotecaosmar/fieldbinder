<?php
    namespace App\Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception implements NotificationMessage
    {
        //interface
        public function showMessage($notification = NULL){
            if($notification = NULL){
                $type = $this->setType($notification[0]);
                require ROOT . VIEW . $type . '.php';
                require ROOT . VIEW . BETWEENTAG1 . '.php';
                echo $notification[1];
                require ROOT . VIEW . BETWEENTAG2 . '.php';
                echo $notification[2];
                require ROOT . VIEW . CLOSETAG . '.php';
            }
        }
        //set type path
        private function setType($type){
            switch($type){
                case ['alert']:
                    return ALERT;
                case ['warning']:
                    return WARNING;
                case ['error']:
                    return ERROR;
            }
        }
    }