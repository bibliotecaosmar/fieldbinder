<?php
    namespace log;
    #=================#
    # ==View of Logs==#
    #=================#

    interface LogSystem
    {
        $log = array();
        
        public function catchLog($log);
        public function viewLogs();
    }