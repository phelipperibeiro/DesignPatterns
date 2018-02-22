<?php

namespace Code\Produto;

use Code\Logger\Logger;
use Code\Produto\ProdutoDAO;

class ProdutoManager
{

    public function __construct(ProdutoDAO $dao, Logger $logger)
    {
        $this->dao = $dao;
        $this->logger = $logger;
    }

    public function save(Produto $produto)
    {
        $this->dao->save($produto);
        $this->logger->success("Produto {$produto->getName()} foi salvo no sistema");
    }
    
    public function update(Produto $produto)
    {
        $this->dao->save($produto);
        $this->logger->success("Produto {$produto->getName()} foi atualizado no sistema");
    }
    
    public function delete(Produto $produto)
    {
        $this->dao->delete($produto);
        $this->logger->success("Produto {$produto->getName()} foi deletado do sistema");
    }

}
