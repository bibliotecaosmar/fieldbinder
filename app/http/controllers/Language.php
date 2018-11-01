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

        protected function setLanguage($language){
            $test = $language;
            if($test = 'pt-br'||'en'){
                require_once ROOT . VIEW . LANG . $language . '.php';
                $this->index = $index;
                $this->plant = $plant;
                $this->animal = $animal;
                $this->insect = $insect;
                $this->mushroom = $mushroom;
                $this->guide = $guide;
                $this->ourproposal = $ourproposal;
            }
        }
    }