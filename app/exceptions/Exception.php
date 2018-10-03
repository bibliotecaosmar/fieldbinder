<?php
    namespace Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception /* implements interface of the action reader*/
    {
        public function __invoke($type , $about , $message){
            $type = $this->setType($type);
            $about = $this->setAbout($about);
            $message = $message.(require CLOSETAG);
            return $type.$about.$message;
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