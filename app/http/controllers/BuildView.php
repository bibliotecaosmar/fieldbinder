<?php
    namespace app\http\controller;

    interface BuildView
    {
        public function buildPage($view , $model);
    }