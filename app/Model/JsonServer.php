<?php
    namespace App\Model;
    #=================#
    # ==Json Server== #
    #=================#

    class JsonServer implements FileOperator
    {
        public $messages;

        private function jsonEncode($datas){
            //
        }

        private function jsonDecode($value){

        }

        public function jsonSelect($database, $values, $where){}
        public function jsonInsert($database, $values, $where){}
        public function jsonUpdate($database, $values, $where){}
        public function jsonDelete($database, $values, $where){}
    }