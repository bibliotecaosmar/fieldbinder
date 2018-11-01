<?php
    namespace App\Http\Controllers;
    #=====================#
    # ==Define Language== #
    #=====================#

    class Language
    {
        protected $index;
        protected $plant;
        protected $animal;
        protected $insect;
        protected $mushroom;
        protected $guide;
        protected $ourproposal;

        private function setVariables($index, 
                                      $plant, 
                                      $animal, 
                                      $insect, 
                                      $mushroom, 
                                      $guide, 
                                      $ourproposal){
            $this->index = $index;
            $this->plant = $plant;
            $this->animal = $animal;
            $this->insect = $insect;
            $this->mushroom = $mushroom;
            $this->guide = $guide;
            $this->ourproposal = $ourproposal;
        }
        protected function setLanguage($language){
            switch($language){
                case 'portuguese':
                    $this->portuguese();
                case 'english':
                    $this->english();
                default:
                    $this->portuguese();
            }
        }

        private function portuguese(){
            require_once ROOT . VIEW . LANG . 'pt-br.php';
            $this->setVariables($index, $plant, $animal, $insect, $mushroom, $guide, $ourproposal);
        }

        private function english(){
            require_once ROOT . VIEW . LANG . 'en.php';
            $this->setVariables($index, $plant, $animal, $insect, $mushroom, $guide, $ourproposal);
        }
    }