<?php

namespace App\models;

require("src/config/factories.php");   

abstract class BaseManager
{
    protected $pdo;

    public function __construct($pdo)
    {
        
        $this->pdo = $pdo;
    }
}

?>