<?php
namespace App\config;

class PDOFactory
{
    private static string $dsn = "mysql:host=db";
    private static string $user = "root";
    private static string $pwd = "example";

    public static function getMysqlConnection(): \PDO
    {
        return new \PDO(self::$dsn, self::$user, self::$pwd);
    }
}