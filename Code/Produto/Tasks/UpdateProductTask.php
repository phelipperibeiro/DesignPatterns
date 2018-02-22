<?php

namespace Code\Produto\Tasks;

use Code\Task\TaskInterface;
use Code\Produto\Produto;

class UpdateProductTask implements TaskInterface
{

    public function run()
    {
        $produto = new Produto();
        $produto->setId(1);
        $produto->setNome("Tennis Corrida");
        
        $ProdutoManager = $this->di->get('produto.manager');
        $ProdutoManager->update($produto);
    }

}

