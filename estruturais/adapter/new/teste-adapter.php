<?php

include_once 'Social/TwitterApi';
include_once 'Social/FacebookApi';

use social\FacebookApi;
use social\TwitterApi;

interface ApiAdapter
{

    function autenticar($apiKey);

    function postar($mensagem);
}

include_once 'Social/FacebookApiAdapter.php';
include_once 'Social/TwitterApiAdapter.php';

class ClientApi
{

    function __construct($apiKey, ApiAdapter $apiAdapter)
    {
        $this->adapter = $apiAdapter;
        $this->adapter->autenticar($apiKey);
    }

    function postar($mensagem)
    {
        $this->adapter->postar($apiKey);
    }

}

$api = new FacebookApi();
$client = ClientApi(123, new FacebookApiAdapter($api));
$client->postar("Postando alguma coisa");
