<?php 

class Database
{
    private static $pdo;

    public static function connect()
    {
        if (!isset(self::$pdo)) {
            $dsn = "mysql:host=localhost;dbname=manger-db;charset=utf8";
            $username = "root";
            $password = "";

            self::$pdo = new PDO($dsn, $username, $password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}