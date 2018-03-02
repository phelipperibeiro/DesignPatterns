<?php

namespace social;

class TwitterApi
{

    public function autenticate($apiKey)
    {
        echo "Autenticando no Twitter com a chave {$apiKey} ";
    }

    public function tweet($message)
    {
        echo "tweetando a mensagem {$message} no Twitter ";
    }

}
