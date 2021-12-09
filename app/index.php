<?php
    // Load Config
    require_once './src/config/factories.php';
    require_once './vendor/autoload.php';

    use App\routes\Router;

    $router = new Router() ;
    $router->getController();
?>