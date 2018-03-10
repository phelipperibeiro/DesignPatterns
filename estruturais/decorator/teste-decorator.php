<?php

interface Client
{

    function getData();
}

class CommentClient Implements Client
{

    public function getData()
    {
        return [
            ['id' => 1, 'conteudo' => 'Conteudo com palavrao'],
            ['id' => 2, 'conteudo' => 'Palavrao com conteudo'],
            ['id' => 3, 'conteudo' => 'Palavrao com algo'],
        ];
    }

}

abstract class ClientDecorator implements Client
{

    /**
     *
     * @var Client
     */
    protected $client;

    function __construct(Client $client)
    {
        $this->client = $client;
    }

}

class RemovedorPalavrao extends ClientDecorator
{

    function getData()
    {
        $data = $this->client->getData();
        foreach ($data as $key => $value) {
            $data[$key]['conteudo'] = str_ireplace('palavrao', '***', $data[$key]['conteudo']);
        }
        return $data;
    }

}

class RemovedorId extends ClientDecorator
{

    function getData()
    {
        $data = $this->client->getData();
        foreach ($data as $key => $value) {
            unset($data[$key]['id']);
        }

        return $data;
    }

}

$client = new CommentClient();
$client = new RemovedorPalavrao($client);
$client = new RemovedorId($client);
$data = $client->getData();


echo "<pre>";
print_r($data);
