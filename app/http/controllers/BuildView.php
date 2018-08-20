<?php
    namespace app\http\controllers;

    interface BuildView
    {
        public function buildView($view , $model = NULL);
    }