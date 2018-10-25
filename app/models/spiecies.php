<?php
    namespace Model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces extends Database implements SpiecesCatalog
    {
        private $spiece;
        private $kingdom;
        private $habitat;
        private $commonName;
        private $pic;
        private $status;
        private $author;

        public function showSpiece($spiece){
            //filter or not
            $dataSpiece = self::selectRow('spiece', 'commonName', $spiece);
            return $profile;
        }
        //Interface CatalogSpieces
        public function showCatalog($view){
            //return array with model
        }

        public function showData($usertype){
            //show data depending of usertype
        }

        public function validadeData($datatype){
            //switch the status of the spiece depending of the *Business Rule
        }

        public function registerData($datatype){
            //register all and any data sent for user            
        }

    }