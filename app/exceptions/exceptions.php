<?php
    namespace \app\exception;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception
    {
        private $exception;

        function __construct($exception){
            $this->exception = $exception;
            setErroMessage();
        }
        //error messages
        setErroMessage($exception){
            switch($exception){
                case 404:
                    echo 'Error 404: server not found';
                    break;
                default :
                    echo 'Error not know';
                    break;
            }
        }
    }