<?php
    #============#
    # ==Config== #
    #============#

    //SYSTEM VARIABLES
    /*

    #--POST--#
    $_POST['user']
    $_POST['view']
    $_POST['atualView']
    $_POST['action']
    $_POST['formRegister']
    $_POST['formSpiecie']
    $_POST['editProfile']
    $_POST['submitData']

    #--COOKIE--#
    $_COOKIE['user']
    $_COOKIE['code']

    */

    //ROOT
    define('ROOT',  '../');
    //VIEW
    define('VIEW' , 'resource/');
    //ESSENTIAL ELEMENTS
    define('HEAD' , 'essential/head.php');
    define('FOOT' , 'essential/foot.php');
    //VIEW ELEMENTS
    define('SIGN_BUTTON' , 'essential/signButton.php');
    define('FORM_PLANT', 'forms/plantForm.php');
    define('FORM_ANIMAL', 'forms/animalForm.php');
    define('FORM_INSECT', 'forms/insectForm.php');
    define('FORM_MUSHROOM', 'forms/murshroomForm.php');
    //MESSAGE
    define('ALERT' , 'message/openTagAlert.php');
    define('WARNING' , 'message/openTagWarning.php');
    define('ERROR' , 'message/openTagError.php');
    define('BETWEENTAG' , 'message/betweenTag.php');
    define('CLOSETAG' , 'message/closeTag.php');
    