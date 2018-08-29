<?php
    namespace App\Model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces
    {
        private $conn = new \PDO("mysql:host=localhost;dbname=spiece","username_dbname", ""); //database connection
        private $spiece;

        public function __construct($spiece){
            $this->spiece = $spiece;
            return getSpiece();
        }

        public function getSpiece($spiece){
            try{
                $getspiece = $conn->prepare("SELECT INTO spiece(:spiece) WHERE ($spiece)");
                $getspiece->fetch($spiece);
                $getspiece->excecute();
            }catch(\PDOException $e){
                $e->getMessage();
            }
        }
    }