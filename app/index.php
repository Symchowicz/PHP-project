<?php
    // Load Config
    require_once '../config/config.php';
    require_once '../vendor/autoload.php';
    $router = new App\routes\Router() ;
    $router->getController();
?>