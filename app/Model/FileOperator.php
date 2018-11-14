<?php
    namespace App\Model;
    #=======================#
    # ==Operator of Files== #
    #=======================#

    interface FileOperator
    {
        public function jsonLastObjLimit($data);
        public function jsonPicDeletion($pic);
        public function jsonEnvyVotation($data);
    }