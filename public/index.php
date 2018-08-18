<!--Welcome to the Fieldbinder Application-->

<?php
    //Start Bootstrap

    require_once '../bootstrap/bootstrap.php';
    echo parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);
