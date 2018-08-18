<?php
    namespace app\model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces implements ShowData
    {
        private $spiece = {
            $id;
            $kingdom;
            $habitat;
            $spiecePicture;
            $commonName;
            $idPic;
            $idMin;
        }

        function showData(){
            return 
        }

        function getSpiece($spiece){
            $spiece->showSpiece();
        }
        
        function updateSpiece($spiece){
            
        }
    }