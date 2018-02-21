<?php

namespace Code\Logger;

class Logger
{

    function success($msg)
    {
        echo PHP_EOL.PHP_EOL;
        echo $msg;
        echo PHP_EOL.PHP_EOL;
    }

}
