<?php

namespace Logger;


interface Logger
{

    function success($msg);

    function warning($msg);

    function error($msg);
}
