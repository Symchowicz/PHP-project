<?php

    namespace App\controllers;

    use App\controllers\BaseController;
    use App\models\PostManager;

    class FrontController extends BaseController
    {
        public function executeIndex()
        {
            echo("c'est l'index");
            
        }

        public function executePostList()
        {
            echo("miaou");
            $manager = new PostManager($pdo);
            echo("grrr");
            $data = $manager->getAllPosts();
            echo("ouaf");
            echo("<br>");

            /* echo($data); */

            return $this->render('Page d\'accueil', $data, 'postList');
            echo("bzzzz");
        }

        public function executeCreatePost()
        {

            return $this->render('Page d\'accueil', [], 'createPost');

        }

        public function executeShow()
        {
            $manager = new PostManager();
            $article = $manager->getPostById($this->params['id']);

            if (!$article) {
                header('Location: /');
                exit();
            }

            return $this->render($article->getTitle(), ['article' => $article],'Frontend/show');
        }
    }

?>