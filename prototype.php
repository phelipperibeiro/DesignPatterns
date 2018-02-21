<?php

class Produto
{

    private $id, $nome, $nomeCategoria, $nomeMarca, $limiteVendas, $porcetagemLucro;

    public function __construct($pcLucro)
    {
        $this->porcetagemLucro = $pcLucro;
    }

    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($value)
    {
        $this->nome = $value;
    }

    public function setNomeCategoria($value)
    {
        $this->nomeCategoria = $value;
    }

    public function setNomeMarca($value)
    {
        $this->nomeMarca = $value;
    }

    public function setLimiteVendas($value)
    {
        $this->limiteVendas = $value;
    }

    public function __clone()
    {
        $this->id = rand(2, 1000);
        $this->nome = 'Tenis Promocao' . $this->id;
    }

}


$produto = new Produto(5);
$produto->setId(1);
$produto->setNome('Tennis de corrida');
$produto->setNomeCategoria('Tennis');
$produto->setNomeMarca('Nike');
$produto->setLimiteVendas(10);

$produto2 = clone $produto;

echo '<pre>';
print_r([$produto2, $produto]);


