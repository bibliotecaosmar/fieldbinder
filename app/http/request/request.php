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

        public function retreatPic(RetreatPicture $pic){

        }

        public function forwardDataInput(){

        }

        public function validateRequest($request){

        }
    }