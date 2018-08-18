<?php
    namespace app\http\request;
    #======================================#
    # ==Interface of Request Validation == #
    #======================================#

    interface ValidateResquest
    {
        const $request = $_POST['request'];

        validateRequest($request);
    }
