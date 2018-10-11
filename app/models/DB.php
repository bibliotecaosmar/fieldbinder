<?php
    namespace Model;
    #==============#
    # ==Database== #
    #==============#

    class Database implements OperatorDB
    {
        private $db;

        public function __invoke($name){
            $this->db = new PDO("mysql: host = localhost; dbname=$name", "Main" , "");
        }

        public function selection($value, $where){
            $this->db->prepare("SELECT $value INTO $where");
            $this->db->bindValue($where, $value);
            if($this->db->execute()){
                return 'gottan';
            }
            return 'fail';
        }
        public function insertion($value, $where){
            $this->db->prepare("INSERT $value INTO $where");
            $this->db->bindValue($where, $value);
            if($this->db){
                return 'gottan';
            }
            return 'fail';
        }
        public function update($value, $where){

        }
        public function delete($value, $where){

        }
    }