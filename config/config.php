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
    define('ROOT', '../');
    //VIEW
    define('VIEW' , 'resource/view/');
    //MESSAGE
    define('ALERT' , 'resource/view/message/openTagAlert.php');
    define('WARNING' , 'resource/view/message/openTagWarning.php');
    define('ERROR' , 'resource/view/message/openTagError.php');
    define('CLOSETAG' , 'resource/view/message/closeTag.php');
    //VIEW ELEMENTS
    define('SIGN_BUTTON' , '../resource/view/essential/signButton.php');
    define('FORM_PLANT', '/resource/view/forms/plantForm.php');
    define('FORM_ANIMAL', '/resource/view/forms/animalForm.php');
    define('FORM_INSECT', '/resource/view/forms/insectForm.php');
    define('FORM_MUSHROOM', '/resource/view/forms/murshroomForm.php');
    define('INDEX' , 'index.php');
    //ESSENTIAL ELEMENTS
    define('FOOT' , 'resource/view/essential/foot.php');
    define('HEAD' , 'resource/view/essential/head.php');
    