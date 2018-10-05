<?php
    namespace App\Exceptions;
    #=========================#
    # ==NotificationMessage== #
    #=========================#

    interface NotificationMessage
    {
        public function showMessage($notification);
    }