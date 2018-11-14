<?php
    namespace App\Model;
    #=================#
    # ==Json Server== #
    #=================#

    class JsonServer implements FileOperator
    {
        private $content;
        private $json;

        public function __construct(){
            $this->contents = file_get_contents('../storage/spieciesDB.json');
            $this->json = json_decode($contents, true);
        }

        private function jsonSearch(){

        }

        private function jsonSendData(){

        }

        private function jsonDelete(){

        }

        public function jsonLastObjLimit($data){
            
        }

        public function jsonPicDeletion($pic){
            
        }
        
        public function jsonEnvyVotation($data){

        }
    }