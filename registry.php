<?php

class Registry
{

    protected static $values;

    static function set($index, $valor)
    {
        static::$values[$index] = $valor;
    }

    static function get($index)
    {
        if (!isset(static::$values[$index])) {
            throw new \InvalidArgumentException("Não há valor cadastro com o indice {$index}");
        }

        return static::$values[$index];
    }

}

Registry::set('pdo', new PDO("sqlite:db"));
Registry::get('pdo');

