<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class ModelController implements GetModel, LoadModel
    {
        private $view;
        private $votation;
        private $infoSpiece;
        private $infoProfile;

        public function getModel($model, $view){
            switch($view){
                case 'editUsers':
                    return $model->editUsers();
                case 'profile':
                    return $model->showProfile();
                case 'spiece':
                    return $model->getSpiece();
                case 'catalog':
                    return $model->showCatalog();
            }
        }

        public function loadModel($model){
            
        }
    }