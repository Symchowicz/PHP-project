<?php

namespace App\models;

use App\config\PDOFactory; 

abstract class BaseManager
{
    protected \PDO $pdo;

    public function __construct($pdo)
    {
        
        $this->pdo = $pdo;
    }
}

?>