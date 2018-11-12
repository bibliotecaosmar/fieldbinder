<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class ModelController implements GetModel
    {
        public function getModel($view, $model){
            switch($view){
                case 'manageUsers':
                    return $model->manageAccounts($_POST['user'], $_POST['password']);
                case 'profile':
                    return $model->showProfile($_POST['user']);
                case 'spiece':
                    return $model->showSpiece($_POST['spiece']);
                case 'catalog':
                    return $model->showCatalog($view);
                default:
                    return NULL;
            }
        }
    }