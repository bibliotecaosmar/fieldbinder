<?php
    namespace App\Http\Controllers;
    #======================#
    # ==Controller Forms== #
    #======================#

    interface ControllerForm
    {
        public function getRegisterForm($form);
        public function getSpieceForm($form);
    }