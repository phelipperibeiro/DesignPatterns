<?php

namespace Logger;

class XMLLogger implements Logger
{

    public function __construct($file)
    {
        $this->xmlFile = new XMLWriter($file);
    }

    public function success($msg)
    {
        $this->xmlFile->writeElement("success", $msg);
    }

    public function warning($msg)
    {
        $this->xmlFile->writeElement("warning", $msg);
    }

    public function error($msg)
    {
        $this->xmlFile->writeElement("error", $msg);
    }

}
