<?php

require_once 'Logger.php';
require_once 'Produto.php';
require_once 'ProdutoObservador.php';

$LoggerServer = new LoggerServer();
$ProdutoObservador = new ProdutoObservador($LoggerServer);

$produto = new Produto(3, 'Produto ZZZ');
$produto->attach($ProdutoObservador);
$produto->setNome('Produto YYY');
