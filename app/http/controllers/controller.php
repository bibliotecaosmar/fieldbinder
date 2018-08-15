<?php
    namespace Controller;
    #================#
    # ==Controller== #
    #================#
    class Controller implements ShowSpiece{
        private $page;

        function __construct($page){
            $this->page = $page;
        }

    }
 