<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Reader of Model== #
    #=====================#

    interface LoadModel
    {
        public function loadModel($model);
    }