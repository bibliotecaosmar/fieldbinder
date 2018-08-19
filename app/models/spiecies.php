<?php
    namespace app\model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces
    {
        private $lastInsertion;
        private $spiece = {
            $scientificName;
            $commonName;
            $kingdom;
            $habitat;
            $spiecePicture;
            $idPic;
            $idMin;
        }

        function __construct($spiece){
            $this->spiece = $spiece;
            updateSpiece();
        }

        public function getSpiece($spiece){
            $spiece = /*database*/;
            return $spiece;
        }
        
        private function updateSpiece($spiece){
            #1.search spiece number
            #2.if exist, update
            #3.else, create new position
        }
    }