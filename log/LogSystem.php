<?php
    namespace App\Log;
    #=================#
    # ==View of Logs==#
    #=================#
    interface LogSystem
    {
        public function catchLog($log);
        public function viewLogs();
    }