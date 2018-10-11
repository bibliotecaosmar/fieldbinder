<?php
    namespace Model;
    #====================================#
    # ==Show Datas of the Spiece Class== #
    #====================================#
    
    interface SpiecesCatalog
    {
        //get array of the spieces
        public function showCatalog($kingdom, $view);
    }