<?php

use social\ApiAdapter;

namespace social;

class ClientApi
{

    function __construct($apiKey, ApiAdapter $apiAdapter)
    {
        $this->adapter = $apiAdapter;
        $this->adapter->autenticar($apiKey);
    }

    function postar($mensagem)
    {
        $this->adapter->postar($mensagem);
    }

}
