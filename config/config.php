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
    $_COOKIE['language']

    #--UPDATE_ACCOUNT--#
    $_POST['newNickname']
    $_POST['newEmail']
    $_POST['newPassword']
    $_POST['newBorn']
    $_POST['newName']
    $_POST['newDiploma']

    +---------------+
    |    actions    |
    +---------------+
    |login          |
    |logout         |
    |register       |
    |updateProfile  |
    |deleteAccount  |
    |submitData     |
    |vote           |
    |reportPicture  |
    +---------------+

    */

    //ROOT
    define('ROOT',  '../');
    //VIEW
    define('VIEW' , 'resource/');
    define('PAGE' , 'views/');
    define('LANG', 'lang/');
    //ESSENTIAL ELEMENTIES
    define('HEAD' , 'essential/head.php');
    define('FOOT' , 'essential/foot.php');
    define('MENU' , 'essential/menu.php');
    define('SIGN_BUTTON' , 'elementies/signButton.php');
    define('USER_WELCOME' , 'elementies/userWelcome.php');
    //MOVEL ELEMENTIES
    define('MODEL' , 'elementies/modelTags.php');
    define('ACTION' , 'elementies/actionTags.php');
    define('EXCEPTION' , 'elementies/exceptionTag.php');
    define('NOT_AVOID' , 'elementies/notAvoid.php');
    //SYSTEM VARIABLE
    define('VIEW_LIST' , array('index' , 'guide' , 'signin' , 'signup' , 'plant' , 'animal' , 'insect' , 'mushroom' , 'ourproposal'));

    