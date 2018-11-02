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

        private function setLanguage($language){
            $this->index = $laguange->index;
            $this->plant = $language->plant;
            $this->animal = $language->animal;
            $this->insect = $language->insect;
            $this->mushroom = $language->mushroom;
            $this->guide = $language->guide;
            $this->ourproposal = $language->ourproposal;
        }

        protected function selectLanguage($language){
            switch($language){
                case 'pt-br':
                    $language = new Portuguese;
                    $this->setLanguage($language);
                case 'en':
                    $language = new English;
                    $this->setLanguage($language);
                default:
                    $language = new Portuguese;
                    $this->setLanguage($language);
            }
        }
    }