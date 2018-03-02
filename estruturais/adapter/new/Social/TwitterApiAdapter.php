<?php

namespace social;

class TwitterApiAdapter implements ApiAdapter
{

    public function __construct(TwitterApi $api)
    {
        $this->api = $api;
    }

    function autenticar($apiKey)
    {
        $this->api->autenticate($apiKey);
    }

    function postar($mensagem)
    {
        $this->api->tweet($mensagem);
    }

}
