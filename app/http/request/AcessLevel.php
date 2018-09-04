<?php
    namespace App\Http\Request;
    //Retreat Picture

    interface AcessLevel
    {
        public function checkAcessLevel($user, $view, $action);
    }