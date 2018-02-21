<?php

namespace Code\Produto;

class Produto
{

    private $id, $nome, $nomeCategoria, $nomeMarca, $limiteVendas, $porcetagemLucro;

    public function __construct($pcLucro = 5)
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
    
    public function getName()
    {
        return $this->nome;
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

}


