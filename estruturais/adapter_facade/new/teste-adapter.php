<?php

require_once 'Social/ApiAdapter.php';
require_once 'Social/ClientApi.php';
require_once 'Social/TwitterApi.php';
require_once 'Social/FacebookApi.php';
require_once 'Social/TwitterApiAdapter.php';
require_once 'Social/FacebookApiAdapter.php';
require_once 'Social/TwitterApiAdapter.php';

use social\ClientApi;
use social\FacebookApi;
use social\FacebookApiAdapter;


$api = new FacebookApi();
$client = new ClientApi(123, new FacebookApiAdapter($api));
$client->postar("Postando alguma coisa");
