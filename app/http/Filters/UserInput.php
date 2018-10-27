<?php
    namespace Http\Filter;
    #================================#
    # ==Class for Input from Forms== #
    #================================#

    class UserInput implements RegisterFilter, LoginFilter, ProfileEditFilter
    {
        public function filteLoginInput($email, $password){}
        public function filteEmail($email){}
        public function filtePwd($password){}
        public function filteNickname($nickname){}
        public function filteBorn($born){}
        public function filteName($name){}
        public function filteDiploma($diploma){}
        public function filteEditInput($edition){}
    }