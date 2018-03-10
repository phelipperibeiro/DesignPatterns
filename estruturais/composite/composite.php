<?php

abstract class Forma
{

    protected $filhos = [];

    public function add(Forma $forma)
    {
        $this->filhos[] = $forma;
    }

    public function mostrar()
    {
        echo $this->nome;
        foreach ($this->filhos as $filho) {
            echo $filho->mostrar();
        }
    }

    function setPosition()
    {
        
    }

    function setSize($width, $height)
    {
        
    }

}

class Quadrado extends Forma
{

    public function mostrar()
    {
        // sua implemetacao []
    }

}

class Circulo extends Forma
{

    public function mostrar()
    {
        // sua implemetacao O
    }

}

class Triangulo extends Forma
{

    public function mostrar()
    {
        // sua implemetacao triangulo
    }

}

class X extends Forma
{

    public function mostrar()
    {
        // sua implemetacao x
    }

}

// desenhado um controle de plastation parde de botoes

$circuloExterno = new Circulo();
$circuloExterno->setSize(80, 80);

$xMaior = new X();
$xMaior->setSize(70, 70);


################################################
$circuloBotaoTriangulo = new Circulo();
$circuloBotaoTriangulo->setSize(20, 20);
$circuloBotaoTriangulo->setPosition('top', 'center');

$botaoTriangulo = new Triangulo();
$botaoTriangulo->setSize(65, 65);

$circuloBotaoTriangulo->add($botaoTriangulo);

$xMaior->add($circuloBotaoTriangulo);
################################################
$circuloBotaoQuadrado = new Circulo();
$circuloBotaoQuadrado->setSize(20, 20);
$circuloBotaoQuadrado->setPosition('left', 'center');

$botaoQuadrado = new Quadrado();
$botaoQuadrado->setSize(65, 65);
$circuloBotaoQuadrado->add($botaoQuadrado);

$xMaior->add($circuloBotaoQuadrado);
################################################
$circuloBotaoX = new Circulo();
$circuloBotaoX->setSize(20, 20);
$circuloBotaoX->setPosition('right', 'center');

$botaoX = new X();
$botaoX->setSize(65, 65);
$circuloBotaoX->add($botaoX);

$xMaior->add($circuloBotaoX);
################################################
$circuloBotaoCirculo = new Circulo();
$circuloBotaoCirculo->setSize(20, 20);
$circuloBotaoCirculo->setPosition('down', 'center');

$botaoCirculo = new Circulo();
$botaoCirculo->setSize(65, 65);
$circuloBotaoCirculo->add($botaoCirculo);

$xMaior->add($circuloBotaoX);
################################################

$circuloExterno->add($xMaior);
$circuloExterno->mostrar();


