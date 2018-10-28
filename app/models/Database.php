<?php
    namespace App\Model;
    #==============#
    # ==Database== #
    #==============#

    abstract class Database
    {
        private $db;
        ///UserDB interface
        protected function databaseConnection(){
            try{
                $this->db = new PDO("mysql: host = localhost; dbname = fildbinder", "Main" , "");
                return $this->db;
            }catch(PDOException $e){
                return FALSE;
            }
        }

        protected function selectRow($database, $value, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT * FROM $database WHERE $value = :nickname");
            $conn->bindValue(":nickname", $where);
            if($conn->execute()){
                $result = $conn->fetch(PDO::FETCH_ASSOC);
                return $result;
            }
            return FALSE;
        }

        protected function selectValues($database, $value, $where, $values){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $value FROM $database WHERE $value = ?");
            $conn->bindValue($where);
            if($conn->execute()){
                $result = $conn->fetch(PDO::FETCH_ASSOC);
            }
            return FALSE;
        }
    }