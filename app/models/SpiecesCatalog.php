<?php
    namespace Model;
    #====================================#
    # ==Show Datas of the Spiece Class== #
    #====================================#
    
    class SpiecesCatalog extends Spiece
    {
        public function __construct($kingdom , $page){
            $this->kingdom = $kingdom;
            $this->page = $page;
            showCatalog();
            return $catalog;
        }
        
        //Datas from Page
        private function showCatalog($kingdom , $page){
            //Colete 12 last spieces catalogeds ou multiples depending of the page
        }
    }