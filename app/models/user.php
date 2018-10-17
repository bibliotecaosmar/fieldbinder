<?php
    namespace Model;
    #===================#
    # ==Data of Users== #
    #===================#
    
    interface User
    {
        public function showProfile($user);
        public function showValidateData();
        public function submitData();
        public function reviseData();
    }