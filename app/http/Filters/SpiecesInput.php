<?php
    namespace Http\Filter;
    #============================#
    # ==Form Inputs to Spieces== #
    #============================#

    class SpiecesInput implements DataFilter, VoteFilter
    {
        public function filteDataForm($form){}
        public function filteVote($user){}
        public function filtePictures($data){}
    }