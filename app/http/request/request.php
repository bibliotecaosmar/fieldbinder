<?php
    namespace app\http\request;
    #=====================#
    # ==Request Manager== #
    #=====================#

    class Request implements RetreatPicture
    {
        $action;

        function __construct($action){
            $this->action = $action;
            switch($action){
                //all request list
            }
        }
        //Retreat pictures for upload
        public function retreatPic(){

        }
        
        public function forwardDataInput(){

        }

        public function validateRequest($request){

        }
    }