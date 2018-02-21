<?php

class Singleton
{

    protected $instance;

    static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = static::prepareInstance();
        }

        return static::$instance;
    }

}

class DbConn extends Singleton
{

    static function prepareInstance()
    {
        return new PDO("sqlite:db");
    }

}

class Cache extends Singleton
{

    static function prepareInstance()
    {
        return new CacheRedis([
            'scheme' => 'tcp',
            'host' => '127.0.0.1',
            'port' => 6379,
        ]);
    }

}

$DbConn = DbConn::prepareInstance();

$Cache = Cache::prepareInstance();
