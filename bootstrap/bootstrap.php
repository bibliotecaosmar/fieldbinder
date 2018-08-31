<?php
    #===============#
    # ==Bootstrap== #
    #===============#

    use App\Exceptions;
    use App\Http\Controllers\IndexController;
    use App\Http\Request;
    use App\Models;
    //use App\Filters;
    use App\Routes\Routes;
    use App\Log;
    
    require_once '../vendor/autoload.php';
    
    new IndexController();
