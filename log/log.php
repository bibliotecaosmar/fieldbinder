<?php
    namespace log;
    #==========#
    # ==Logs== #
    #==========#
    interface Log
    {
        const $log = array();
        public function registerLog($log);
    }