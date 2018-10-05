<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class ModelController implements GetModel, LoadModel
    {
        public function getModel($user, $view){
            //Obtain of Catalog or Account and User classes datas
            switch($view){
                case 'profile':
                    //
                case 'catalog':
                    $model = CatalogSpieces::showCatalog($view , $_POST['page']);
                    return $model;
                case 'spiece':
                    $spiece = new Spieces($_POST('spiece'));
                    if($spiece->status = 'confirmed'){
                        array_push($model , $spiece->spiece);
                        array_push($model , $spiece->kingdom);
                        array_push($model , $spiece->habitat);
                        array_push($model , $spiece->commonName);
                        array_push($model , $spiece->pic);
                        array_push($model , $spiece->authors);

                        return $model;
                    }
                default:
                    return ;
            }
        }

        public function loadModel($model){
            
        }
    }