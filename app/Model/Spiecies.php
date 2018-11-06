<?php
    namespace App\Model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spiecies extends Database implements SpiecesCatalog, Votation
    {
        public $spiece;
        public $kingdom;
        public $habitat;
        public $commonName;
        public $pic;
        public $status;
        public $author;



        public function showSpiece($spiece){
            //filter or not
            $dataSpiece = self::selectRow('spiece', 'commonName', $spiece);
            return $profile;
        }
        //interface
        public function showVotation($spiece){
            return ;
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