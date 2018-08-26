<?php
    namespace app\model;
    #=============#
    # ==Spieces== #
    #=============#
    
    class Spieces
    {
        private $conn = new \PDO("mysql:host=localhost;dbname=spiece","username_dbname", ""); //database connection
        private $spiece;
    }