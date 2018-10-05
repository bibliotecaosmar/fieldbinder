<?php
    namespace Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception implements NotificationMessage /* implements interface of the action reader*/
    {
        public function __invoke($type , $about , $message){
            $type = $this->setType($type);
            array_push($notification , $type);
            array_push($notification , BETWEENTAG1);
            array_push($notification , $about);
            array_push($notification , BETWEENTAG2);
            array_push($notification , $message);
            array_push($notification , CLOSETAG);
            return $notification;
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
        //interface
        public function showMessage($notification = NULL){
            if(isset($notification)){
                require $notification[0];
                require $notification[1];
                require $notification[2];
                echo $notification[3];
                require $notification[4];
                echo $notification[5];
                require $notification[6];
            }
        }

    }