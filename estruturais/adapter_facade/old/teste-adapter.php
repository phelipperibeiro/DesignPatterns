<?php

include_once './Social/TwitterApi';
include_once './Social/FacebookApi';

use social\FacebookApi;
use social\TwitterApi;

if ($opcao = 'face') {
    $api = new FacebookApi();
    $api->auth('apiKey');
    $api->post('New post face');
} else {
    $api = new TwitterApi();
    $api->autenticate('apiKey');
    $api->tweet('New tweet Twitter');
}
