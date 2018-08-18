<?php
    namespace app\model;
    #===================#
    # ==Show of Datas== #
    #===================#
    
    interface ShowData
    {
        //Data validated
        public function showValidatedData($datatype);

        //Data from validate
        public function showData($datatype);
    }