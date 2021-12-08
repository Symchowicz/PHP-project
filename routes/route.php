<?php 
    isset($_GET['p']) ? $path = $GET['p'] : $path = null;
    
    switch ($path) {
        // Frontend
        case null:
            $controller = new Controller\controller.php /* \FrontendController() */ ;
            $controller->index();
            break;

        case 'show':
            $controller = new Controller\/* FrontendController() */;
            $controller->show($_GET['articleId']);
            break;
            
        // Admin
        case 'admin':
            $controller = new \Controller\/* AdminController() */;
            $controller->index();
            break;

        // Articles
        case 'addArticle':
            $controller = new \Controller\/* ArticleController() */;
            $controller->addArticle();
            break;
            
        case 'deleteArticle':
            $controller = new \Controller\/* ArticleController() */;
            $controller->deleteArticle();
            break;
    }
?>