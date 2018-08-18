<?php
    namespace log;
    
    interface RequestLogs
    {
        $log = {
            $action = $_POST['action'];
            $view = $_POST['view'];
            $user = $_POST['user'];
            $password = $_POST['password'];
        }

        public function registerLogs($log);
    }