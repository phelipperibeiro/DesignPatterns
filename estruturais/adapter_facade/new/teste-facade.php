<?php

require_once 'Social/ApiFacade.php';
require_once 'Social/ClientApi.php';
require_once 'Social/ApiAdapter.php';
require_once 'Social/TwitterApi.php';
require_once 'Social/FacebookApi.php';
require_once 'Social/TwitterApiAdapter.php';
require_once 'Social/FacebookApiAdapter.php';
require_once 'Social/TwitterApiAdapter.php';

use social\ApiFacade;

$api = new ApiFacade();
$api->postar('facebook', 'merda facade');

