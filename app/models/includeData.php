<?php
    namespace \app\model;
    #====================================#
    # ==Include of Datas from Spiecies== #
    #====================================#
    
    class IncludeData implements ShowData
    {
        private $data = {
            $spiecie;
            $kingdom;
            $habitat;
            $commonName;
            $idPic;
            $idMin;
            $author;
            $data;
            $hour;
        };

        function _contruct($data){
            $this->data = $date;
            registerData();
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