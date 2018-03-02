<?php

require_once 'Social/ApiAdapter.php';
require_once 'Social/TwitterApi.php';
require_once 'Social/FacebookApi.php';
require_once 'Social/TwitterApiAdapter.php';
require_once 'Social/FacebookApiAdapter.php';
require_once 'Social/TwitterApiAdapter.php';

use social\ApiAdapter;
use social\FacebookApi;
use social\TwitterApi;
use social\FacebookApiAdapter;
use social\TwitterApiAdapter;

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

$api = new FacebookApi();
$client = new ClientApi(123, new FacebookApiAdapter($api));
$client->postar("Postando alguma coisa");
