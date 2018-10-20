<?php
    namespace App\Exceptions;
    #================#
    # ==Exceptions== #
    #================#
    
    class Exception implements NotificationMessage
    {
        //interface
        public function showMessage($notification){
            echo "<h4 id=\"$notification[0]\">$notification[0]</h4>";
            echo "<h5>$notification[1]</h5>";
            echo "<h6>$notification[2]</h6>";
        }
    }