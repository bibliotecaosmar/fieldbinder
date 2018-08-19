<?php
    namespace app\http\controllers;

    interface BuildView
    {
        public function buildPage($view , $model);
    }