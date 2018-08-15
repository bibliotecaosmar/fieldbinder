<!--Welcome to the Fieldbinder Application-->

<?php
    //call autoload
    define ( 'WWW_ROOT' , dirname(__FILE__) );
    define ( 'DS' , DIRECTORY_SEPARATOR );

    require_once (WWW_ROOT.DS.'autoload.php');

    $loadpage = new Routes($_SERVER['REQUEST_URI']);