<?php
namespace app\models;

use PDO;
use PDOException;

class Connection
{
    private static $pdo = null;

    public static function connect()
    {
        try {
            if (!static::$pdo) {
                static::$pdo = new PDO('mysql:host=localhost;dbname=lumen', 'root', '', [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }
            return static::$pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

    public static function close()
    {
        static::$pdo = null;
    }
}
