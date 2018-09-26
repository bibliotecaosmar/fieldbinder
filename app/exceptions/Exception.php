<?php
    namespace Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception
    {
        public function __construct($type , $about , $message){
            $type = $this->setType($type);
            $about = $this->setAbout($about);
            $message = $message.(require CLOSETAG);
            return $type.$about.$message;
        }
        //set type path
        private function setType($type){
            switch($type){
                case ['alert']:
                    return require ALERT;
                case ['warning']:
                    return require WARNING;
                case ['error']:
                    return require ERROR;
            }
        }
        //set about path
        private function setAbout($about){
            switch($about){
                //message origin
            }
        }
    }