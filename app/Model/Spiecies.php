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
            return self::selectRow('spiecies', 'commonName', $spiece);
        }
        //Interface CatalogSpieces
        public function showCatalog($kingdom, $view){
            //return array with model
            $result = self::databaseConnection();
            $result->prepare("SELECT * FROM 'spiecies' order by 'id' DESC limit 9");
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        //Interface Votation
        public function getVotation($spiece){}
        //Interface Votation
        public function showVotation($spiece){}

    }