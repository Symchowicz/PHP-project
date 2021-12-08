<?php

    namespace Controller;

    echo("Bonjour le Monde");
    echo("<br>");

    require "Config/Model/PostManager.php";
    echo("Bonjour le Monde");
    echo("<br>");

    use PostManager;
    echo("Bonjour le Monde");
    echo("<br>");

    include("Config/Controller/BaseController.php");
    echo("Bonjour le Monde");
    echo("<br>");

    use BaseController;
    echo("Bonjour le Monde");
    echo("<br>");

    class FrontController extends BaseController
    {
        public function executeIndex (int $number = 5)
        {
            $manager = new PostManager();
            $index = $manager->getPosts($number);

            return $this->render('Page d\'accueil',$index,'Frontend/index');
        }

        public function executeShow()
        {
            $manager = new PostManager();
            $article = $manager->getPostById($this->params['id']);

            if (!$article) {
                header('Location: /');
                exit();
            }

            return $this->render($article->getTitle(), ['article' => $article], 'Frontend/show');
        }
    }

    echo("Hello World");

?>