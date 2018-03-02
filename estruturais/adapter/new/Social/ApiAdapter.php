<?php

namespace social;

interface ApiAdapter
{

    function autenticar($apiKey);

    function postar($mensagem);
}
