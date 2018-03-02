<?php

namespace social;

class FacebookApiAdapter implements ApiAdapter
{

    public function __construct(FacebookApi $api)
    {
        $this->api = $api;
    }

    function autenticar($apiKey)
    {
        $this->api->auth($apiKey);
    }

    function postar($mensagem)
    {
        $this->api->post($mensagem);
    }

}
