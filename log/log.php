<?php
    namespace log;
    #==========#
    # ==Logs== #
    #==========#
    class Log implements LogSystem
    {
        //private $conn = new \PDO("mysql:host=localhost;dbname=log" , "root" , " ");
        private $log = array();
        
        //interface method
        public function viewLog(){
            //resgate all logs in table
        }
        //interface method
        private function registerLog(RegisteLog $log){
            $data = date('Y-m-d h:i:s');
            array_push($log , "ip : $_SERVER['REMOTE_ADDR']");
            array_push($log , "action : $_POST['action']");
            array_push($log , "view : $_POST['view']");
            array_push($log , "user : $_POST['user']");
            array_push($log , "password : $_POST['password']");
            array_push($log , "time : $data");

            //regist log in a sql table
            try{
                $insertionLog = $conn->prepare("INSERT INTO log VALUE(:log)");
                $insertionLog->bindValue(":log" , $log);
                $insertionLog->execute();
            }catch(Exception $e)){
                
            }
        }
    }