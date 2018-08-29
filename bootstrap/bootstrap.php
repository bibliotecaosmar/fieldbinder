<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    use App\Exceptions;
    use App\Http\Controllers;
    use App\Http\Request;
    use App\Models;
    //use App\Filters;
    use App\Routes;
    use App\Log;
    
    require_once '../vendor/autoload.php';
    
    new Routes();
