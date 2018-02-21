<?php

namespace Code\Produto\Tasks;

use Code\Task\TaskInterface;
use Code\Produto\Produto;
use Code\Produto\ProdutoDAO;
use Code\Produto\ProdutoManager;
use Code\Logger\Logger;

class DeleteProductTask implements TaskInterface
{

    public function run()
    {
        $produto = new Produto();
        $produto->setId(1);
        $produto->setNome("Tennis Corrida");

        $Conn = new \PDO('mysql:host=10.10.1.240;dbname=movida_gtf', 'cpd', '');
        $ProdutoDAO = new ProdutoDAO($Conn);
        $Logger = new Logger();

        $ProdutoManager = new ProdutoManager($ProdutoDAO, $Logger);
        $ProdutoManager->delete($produto);
    }

}

