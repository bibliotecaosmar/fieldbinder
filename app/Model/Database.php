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
        protected function checkValues($database, $value, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $value FROM $database WHERE $where");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }
        
        //SELECT VALUES
        protected function selectValues($database, $values, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT $values FROM $database WHERE $where");
            if($conn->execute()){
                return $result = $conn->fetch(PDO::FETCH_ASSOC);
            }
            return FALSE;
        }
        
        //INSERT VALUES IN DATABASE
        protected function insertValues($database, $values, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("INSERT INTO $database($where) VALUES $values");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }

        //UPDATE VALUES OF DATABASE
        protected function updateValues($database, $values, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("UPDATE INTO $database($where) VALUES $values");
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }

        //DELETE VALUES OF DATABASE
        protected function deleteValues($database, $where){
            $conn = $this->databaseConnection();
            $conn->prepare("SELECT FROM $database WHERE ?");
            $conn->fetch($where);
            if($conn->execute()){
                return TRUE;
            }
            return FALSE;
        }
    }