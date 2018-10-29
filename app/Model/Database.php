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
        
        //CHECK VALUES
        protected function checkValue($database, $value, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $value FROM $database WHERE $where");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }
        
        //SELECT SPECIFICY VALUES
        protected function selectValues($database, $value, $where, $values){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $value FROM $database WHERE $where");
            if($conn->execute()){
                return $result = $conn->fetch(PDO::FETCH_ASSOC);
            }
            return FALSE;
        }
        
        //SELECT ALL VALUES OF ONE ROW
        protected function selectRow($database, $value, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $value FROM $database WHERE $where");
            if($conn->execute()){
                return $result = $conn->fetch(PDO::FETCH_ASSOC);
            }
            return FALSE;
        }
        
        //INSERT VALUES IN DATABASE
        protected function insertValue($database, $values, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("INSERT INTO $database($where) VALUES $values");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }

        //UPDATE ANY VALUE IN DATABASE
        protected function updateValue($database, $values, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("UPDATE INTO $database($where) VALUES $values");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }

        //DELETE ANY VALUE OF DATABASE
        protected function deleteValue($database, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT FROM $database WHERE ?");
            $conn->fetch($where);
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }
    }