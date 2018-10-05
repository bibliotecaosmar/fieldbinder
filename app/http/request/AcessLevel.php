<?php
    namespace App\Http\Request;
    //Retreat Picture

    interface AcessLevel
    {
        public function checkAcessLevelView($user, $view);
        public function checkAcessLevelAction($user , $action);
    }