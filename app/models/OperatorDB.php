<?php
    namespace Model;
    #=======================#
    # ==Database Operator== #
    #=======================#

    interface OperatorDB
    {
        public function selection($value, $where);
        public function insertion($value, $where);
        public function update($value, $where);
        public function delete($value, $where);
    }