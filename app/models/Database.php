<?php
    namespace Model;
    #==============#
    # ==Database== #
    #==============#

    class Database implements UserDB, SpiecesDB
    {
        private $db;
        ///UserDB interface
        public function userConnection($user){
            try{
                $this->db = new PDO("mysql: host = localhost; dbname = user", "Main" , "");
                return $this->db;
            }catch(PDOException $e){
                return FALSE;
            }
        }
        //SpiecesDB interface
        public function spiecesConnection($spiece){
            try{
                $this->db = new PDO("mysql: host = localhost; dbname = spieces", "Main" , "");
                return $this->db;
            }catch(PDOException $e){
                return FALSE;
            }
        }
    }