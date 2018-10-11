<?php
    namespace App\Http\Controllers;
    #========================#
    # ==GetModel Interface== #
    #========================#

    interface GetModel
    {
        public function getModel($user, $view);
    }