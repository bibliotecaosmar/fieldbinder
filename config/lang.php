<?php
    $language = $_COOKIE['lang'] ?? 'pt-br';
    $language = ROOT . VIEW . LANG . $language . '.php';
    require_once $language;
    