<?php

namespace Logger;

class XMLFactory extends AbstractLoggerFactory
{

    protected function createLogger()
    {
        return new XMLLogger('path_file/xml_file.xml');
    }

}
