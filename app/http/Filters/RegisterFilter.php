<?php
    namespace App\Http\Filter;
    #==========================#
    # ==Validate of New User== #
    #==========================#

    interface RegisterFilter
    {
        public function filteEmail($email);
        public function filtePwd($password);
        public function filteNickname($nickname);
        public function filteBorn($born);
        public function filteName($name);
        public function filteDiploma($diploma);
        public function standsValidateDatas($form);
    }