<?php

namespace Logger;

class DbLogger implements Logger
{

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function success($msg)
    {
        $sql = "INSERT INTO LOG (data, msg, tipo) VALUES (NOW(), {$msg}, 1)";
        $this->conn->exec();
    }

    public function warning($msg)
    {
        $sql = "INSERT INTO LOG (data, msg, tipo) VALUES (NOW(), {$msg}, 1)";
        $this->conn->exec();
    }

    public function error($msg)
    {
        $sql = "INSERT INTO LOG (data, msg, tipo) VALUES (NOW(), {$msg}, 1)";
        $this->conn->exec();
    }

}
