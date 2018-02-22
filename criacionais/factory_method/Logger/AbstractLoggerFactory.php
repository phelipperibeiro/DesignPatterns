<?php

namespace Logger;

abstract class AbstractLoggerFactory
{

    abstract protected function createLogger();

    public function getLogger()
    {
        return $this->createLogger();
    }

}
