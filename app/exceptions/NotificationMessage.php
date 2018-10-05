<?php
    namespace Exception;
    #=========================#
    # ==NotificationMessage== #
    #=========================#

    interface NotificationMessage
    {
        public function showMessage($notification);
    }