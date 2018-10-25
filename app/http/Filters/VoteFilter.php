<?php
    namespace Http\Filter;
    #=====================#
    # ==Filter of Votes== #
    #=====================#

    interface VoteFilter
    {
        public function filteVote($user);
        public function filtePictures($data);
    }