<?php
    namespace Model;
    #==============#
    # ==Database== #
    #==============#

    abstract class Database
    {
        private $db;
        ///UserDB interface
        public function databaseConnection(){
            try{
                $this->db = new PDO("mysql: host = localhost; dbname = fildbinder", "Main" , "");
                return $this->db;
            }catch(PDOException $e){
                return FALSE;
            }
        }   
    }