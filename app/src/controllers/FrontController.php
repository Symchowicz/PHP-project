<?php

    namespace App\controllers;

    use App\controllers\BaseController;
    use App\models\PostManager;
    use App\models\CommentManager;
    use App\models\UserManager;
    use App\config\PDOFactory;

    class FrontController extends BaseController
    {
        public function executeIndex()
        {
            echo("c'est l'index");
            
        }

        public function executePostList()
        {
            $manager = new PostManager(PDOFactory::getMysqlConnection());
            $data = $manager->getAllPosts();

            return $this->render('Liste des Posts', ['posts' => $data], 'postList');
        }

        public function executePostById()
        {
<<<<<<< Updated upstream
            $manager1= new PostManager(PDOFactory::getMysqlConnection());
            $manager2= new CommentManager(PDOFactory::getMysqlConnection());
            $manager3= new UserManager(PDOFactory::getMysqlConnection());
            $id = $this->params["id"];
            $data1 = $manager1->getPostById($id);
            $data2 = $manager2->getCommentById($id);
            //$data3 = $manager3->getUserByPostId($id);

            return $this->render("'Post numéro'+$id", ['posts' => $data1, 'comments' => $data2, 'userPost' => $data3], 'post');
=======
            $manager = new PostManager(PDOFactory::getMysqlConnection());
            $data = $manager->getPostById(1);

            /* echo($data); */

            return $this->render('Post numéro 1', $data, 'post');
>>>>>>> Stashed changes
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