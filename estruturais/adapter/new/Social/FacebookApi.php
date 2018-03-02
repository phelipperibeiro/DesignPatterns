<?php

namespace social;

class FacebookApi
{

    public function auth($apiKey)
    {
        echo "Autenticando no Facebook com a chave {$apiKey} ";
    }

    public function post($message)
    {
        echo "Postando a mensagem {$message} no Facebook ";
    }

}
