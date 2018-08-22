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
                case 01:
                    return ['warning'] , ['01'];
                    break;
                case 404:
                    return ['error'] , ['404'];
                    break;
                default :
                    return 'Error not know';
                    break;
            }
        }
    }