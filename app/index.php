<?php
    // Load Config
    require_once './src/config/factories.php';
    require_once './vendor/autoload.php';
    $router = new App\routes\Router() ;
    $router->getController();
?>