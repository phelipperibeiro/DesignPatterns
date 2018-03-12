<?php

interface Logger
{

    function success($msg);

    function warning($msg);
}

class LoggerServer implements Logger
{

    function success($msg)
    {
        $sql = "insert into log ({$msg}, 1)";
    }

    function warning($msg)
    {
        $sql = "insert into log ({$msg}, 2)";
    }

}
