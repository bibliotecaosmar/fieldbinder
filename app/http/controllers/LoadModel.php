<?php
    namespace Http\Controllers;
    #=====================#
    # ==Reader of Model== #
    #=====================#

    interface ModelReader
    {
        public function loadModel($model);
    }