<?php

namespace social;

use social\ClientApi;
use social\FacebookApi;
use social\FacebookApiAdapter;
use social\TwitterApi;
use social\TwitterApiAdapter;

class ApiFacade
{
    function postar($onde, $mensagem)
    {
        switch ($onde) {
            case 'facebook';
                $api = new FacebookApi();
                $client = new ClientApi(123456, new FacebookApiAdapter($api));
                break;
            case 'twitter';
                $api = new TwitterApi();
                $client = new ClientApi(2345678, new TwitterApiAdapter($api));
                break;
            default:
                throw new \InvalidArgumentException("serviço invalido");
        }
        
        $client->postar($mensagem);
    }

}
