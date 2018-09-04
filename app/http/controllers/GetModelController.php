<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class GetModelController implements GetModel
    {
        public function getModel(GetModel $user, GetModel $view){
            //Obtain of Catalog or Account and User classes datas
            switch($view){
                case ['profile']:
                    break;
                case ['calalog' , 'plant']:
                    break;
                case ['catalog' , 'animal']:
                    break;
                case ['catalog' , 'insect']:
                    break;
                case ['catalog' , 'mushroom']:
                    break;
                case ['spiece']:
                    break;
                default:
                    break;
            }
            return $model;
        }
    }