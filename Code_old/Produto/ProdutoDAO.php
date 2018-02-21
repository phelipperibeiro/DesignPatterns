<?php

namespace Code\Produto;

class ProdutoDAO
{

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function save(Produto $produto)
    {
        $sql = null === $produto->getId() ? "INSERT INTO........" : "UPDATE SET ....... WHERE {$produto->getId()}";
        $this->conn->exec($sql);
    }

    public function delete(Produto $produto)
    {
        $sql = "DELETE FROM ..... WHERE {$produto->getId()}";

        $this->conn->exec($sql);
    }
}
