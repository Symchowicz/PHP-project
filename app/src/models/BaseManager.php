<?php

namespace App\models;

require('App/src/config/factories.php');

abstract class BaseManager
{
    protected $pdo;

    public function __construct($pdo)
    {
        
        $this->pdo = $pdo;
    }
}

?>