<?php
    namespace App\Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception
    {
        private $exception;

        public function __construct($exception){
            $this->exception = $exception;
            return $this->setErroMessage();
        }
        //error messages
        /*This message will be used in many application levels for avoid error explaination*/
        private function setErroMessage($exception){
            switch($exception){
                case 01:
                    return ['warning' , 'Unfilled Field'];
                    break;
                case 02:
                    return ['warning' , 'Data Not Found'];
                    break;
                case 03:
                    return ['warning' , 'Invalided Field'];
                    break;
                case 404:
                    return ['error' , '404, Server Not Found'];
                    break;
                default :
                    return ['error' , 'Unknow Error'];
                    break;
            }
        }
    }