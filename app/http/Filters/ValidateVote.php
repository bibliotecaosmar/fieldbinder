<?php
    namespace App\Http\Filter;
    #=====================#
    # ==Filter of Votes== #
    #=====================#

    interface ValidateVote
    {
        public function validateVote($user);
        public function validadePictures($data);
    }