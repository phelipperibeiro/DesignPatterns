<?php

class ProdutoObservador implements \SplObserver
{

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function update(\SplSubject $subject)
    {
        echo PHP_EOL;
        echo "Produto {$subject->getName()} foi alterado";
        echo PHP_EOL;
        $this->logger->success("Produto {$subject->getName()} foi alterado");
    }

}
