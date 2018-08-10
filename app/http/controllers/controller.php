<?php
    namespace Controller;
    //Controller
    class Controller{
        define($home, '../resource/view/home/home.php')
        define($header, '../resource/view/essetial/header.php')
        define($footer, '../resource/view/essetial/footer.php')
        $session = $_SESSION['nickname'];
        $page;
    }
    
    class PageController extends Controller{

    }