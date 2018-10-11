<?php
    namespace Model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces implements SpiecesCatalog , ShowData
    {
        private $spiece;
        private $kingdom;
        private $habitat;
        private $commonName;
        private $pic;
        private $status;
        private $author;

        public function getSpiece($spiece, OperatorDB $conn){
            try{
                $getspiece = $conn->prepare("SELECT INTO spiece(:spiece) WHERE ($spiece)");
                $getspiece->fetch($spiece);
                $getspiece->excecute();
            }catch(\PDOException $e){
                $e->getMessage();
            }
        }
        //Interface CatalogSpieces
        public function showCatalog($kingdom, $view){
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