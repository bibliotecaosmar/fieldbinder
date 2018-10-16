<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class ModelController implements GetModel
    {
        private $view;
        private $votation;
        private $infoSpiece;
        private $infoProfile;

        public function getModel($view, $model){
            switch($view){
                case 'editUsers':
                    return $model->manageAccounts($user, $password);
                case 'profile':
                    return $model->showProfile($user);
                case 'spiece':
                    return $model->getSpiece($spiece);
                case 'catalog':
                    return $model->showCatalog($view);
                default:
                    return NULL;
            }
        }
    }