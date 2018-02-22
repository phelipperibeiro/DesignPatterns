<?php

namespace Logger;

class DbFactory extends AbstractLoggerFactory
{

    protected function createLogger()
    {
        return new DbLogger(new \PDO('mysql:host=10.10.1.240;dbname=movida_gtf', 'cpd', ''));
    }

}
