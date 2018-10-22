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
            $conn = self::databaseConnection();
            $conn->prepare("SELECT spiece FROM spiece WHERE :spiece");
            $spiece = $conn->fetch(":spiece", $spiece);
            if($conn->execute()){
                return $spiece;
            }
            return FALSE;
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