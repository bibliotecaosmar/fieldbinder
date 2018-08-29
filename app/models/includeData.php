<?php
    namespace App\Model;
    #====================================#
    # ==Include of Datas from Spiecies== #
    #====================================#
    
    class IncludeData implements ShowData
    {
        private $data;

        public function _contruct($data){
            $this->data = $date;
        }

        public function showData($usertype){
            //show data depending of usertype
        }

        public function validadeData($datatype){
            //transform data input in data validation e data inclusion depending of the *Business Rule
        }

        public function registerData($datatype){
            //register all and any data sent for user            
        }


    }