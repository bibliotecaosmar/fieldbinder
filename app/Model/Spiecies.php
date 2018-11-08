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
        public $author;

        public function showSpiece($spiece){
            //filter or not
            return self::selectRow('spiece', 'commonName', $spiece);
        }
        //Interface CatalogSpieces
        public function showCatalog($kingdom, $view){
            //return array with model
        }
        //Interface Votation
        public function getVotation($spiece){}
        //Interface Votation
        public function showVotation($spiece){}

    }