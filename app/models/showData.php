<?php
    namespace App\Model;
    #===================#
    # ==Show of Datas== #
    #===================#
    
    interface ShowData
    {
        //Data from validate
        public function showData($usertype);
        //Data validated
        public function ValidateData($datatype);
    }