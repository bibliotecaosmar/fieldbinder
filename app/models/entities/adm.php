<?php
    namespace Adm;
    /////////
    ///Adm///
    /////////
    final class Adm extends Adult{
        private $name;

        private function __construct(){
            $this->name = $name;
        }
        //send email
        private function envyReport(){
            sendEmail(self::$email);
        }
    }