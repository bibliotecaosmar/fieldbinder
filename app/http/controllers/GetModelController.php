<?php
    namespace Http\Controllers;
    #=====================#
    # ==Getter of Model== #
    #=====================#

    class GetModelController implements GetModel
    {
        public function getModel($user, $view){
            //Obtain of Catalog or Account and User classes datas
            switch($view){
                case 'profile':
                    //
                case 'catalog':
                    $view = CatalogSpieces::showCatalog($view , $_POST['page']);
                    return $view;
                case 'spiece':
                    $spiece = new Spieces($_POST('spiece'));
                    if($spiece->status = 'confirmed'){
                        array_push($info , $spiece->spiece);
                        array_push($info , $spiece->kingdom);
                        array_push($info , $spiece->habitat);
                        array_push($info , $spiece->commonName);
                        array_push($info , $spiece->pic);
                        array_push($info , $spiece->authors);

                        return $info;
                    }
                    return new Exception('warning' , 'spiece' , 'not found');
                default:
                    return array();
            }
        }
    }