<?php
    namespace Exception;
    ////////////////
    ///Exceptions///
    ////////////////
    class Exception{
        private $exception;

        function __construct($exception){
            $this->exception = $exception;
        }
        //error messages
        private erroMessage($exception){
            switch($exception){
                case 404:
                    echo "Erro 404: server not found";
            }
        }
    }