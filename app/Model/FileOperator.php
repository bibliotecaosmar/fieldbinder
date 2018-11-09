<?php
    namespace App\Model;
    #=======================#
    # ==Operator of Files== #
    #=======================#

    interface FileOperator
    {
        public function jsonSearch($values);
        public function jsonEncode($database, $values, $where);
        public function jsonDecode($database, $values, $where);
        public function countPicReports($pic);
    }