<?php

use PDO;

class DAO extends PDO{ // extends é a herança
    protected static $connection = null;
    
    #[Override]
    public function __construct()
    {
        $dsn = "mysql:host".$_ENV['db']['host'].";dbname="
        .$_ENV['db']['database'];

        if(self::$connection == null)
        {
            self::$connection = new PDO(
                $dsn,
                $_ENV['db']['user'],
                $_ENV['db']['pass'],
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
                ]
            )
        }
    }
}