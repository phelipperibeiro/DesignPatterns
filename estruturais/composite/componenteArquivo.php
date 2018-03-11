<?php

abstract class ComponenteArquivo
{

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    abstract public function add(ComponenteArquivo $componete);

    abstract public function mostrar($profundidade);
}

class Arquivo extends ComponenteArquivo
{

    public function add(ComponenteArquivo $ComponenteArquivo)
    {
        throw new \DomainException("Voce nao pode add arquivos a arquivos");
    }

    public function mostrar($profundidade)
    {
        echo str_repeat('-', $profundidade) . $this->nome . PHP_EOL;
    }

}

class Pasta extends ComponenteArquivo
{

    /**
     *
     * @var ComponenteArquivo[] 
     */
    protected $filhos;

    function add(ComponenteArquivo $componente)
    {
        $this->filhos[] = $componente;
    }

    function mostrar($profundidade)
    {
        echo str_repeat('-', $profundidade) . $this->nome . PHP_EOL;

        foreach ($this->filhos as $filho) {
            $filho->mostrar($profundidade + 3);
        }
    }

}

$raiz = new Pasta('raiz');

$arquivo1 = new Arquivo('arquivo 1.txt');
$arquivo2 = new Arquivo('arquivo 2.txt');
$arquivo3 = new Arquivo('arquivo 3.txt');


$musicas = new Pasta('musicas');
$musicas->add(new Arquivo('numb linkin park.mp3'));
$musicas->add(new Arquivo('in the end linkin park.mp3'));

$raiz->add($arquivo1);
$raiz->add($arquivo1);
$raiz->add($musicas);
$raiz->add($arquivo3);


echo $raiz->mostrar(1);
exit;

