<?php

require './Produto.php';
require './IteratorFiltravel.php';

$produtos = [
    new Produto(11, 'keyboard'),
    new Produto(234, 'mouse'),
    new Produto(50, 'monitor'),
    new Produto(500, 'power cable'),
    new Produto(358, 'memory'),
];

//$tmp = [];
//foreach ($produtos as $produto) {
//    if($produtos->getId() > 10){
//        
//    }
//}

$iterator = new IteratorFiltravel($produtos);
foreach ($iterator as $produto) {

    echo PHP_EOL;
    print_r($produto);
    echo PHP_EOL;
    
}