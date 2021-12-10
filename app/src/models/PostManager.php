<?php

namespace App\models;

use App\entity\Post;
use App\controllers\BaseController;


class PostManager extends BaseManager
{

    
    //Récupérer les infos//

    public function RecupDate(){
        $date = new \DateTime('NOW');

        return $date;
    }

    public function RecupTitle(){
        $title = $_POST['title'];

        return $title;
    }

    public function RecupContent(){
        $content = $_POST['content'];

        return $content;
    }

    public function RecupUser_Id(){
        $user_id = 1;

        return $user_id;
    }

    //Limiter longueur du texte//
    public function LimitText($text){
        $text = mb_strimwidth($text, 0, 10, "...");
    }

    /**
     * @return Post[]
     */
    public function getAllPosts()
    {
        
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`posts_table`");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\Post::class);
    }

    public function getPostById(int $id)
    {
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`posts_table` INNER JOIN `CMS`.`users_table` ON `posts_table`.`user_id` = `users_table`.`user_id` WHERE `posts_table`.`post_id` = $id");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\Post::class);

    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function createPost(Post $post)
    {
        require("src/config/factories.php");   
        $requete = $pdo->prepare("INSERT INTO `CMS`.`posts_table` (`post_id`, `date`, `title`, `content`, `user_id`) VALUES (NULL, NOW(), :title, :content, :user_id)");
        $requete->execute( array(
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'user_id' => '1'
            )
        );
        return true;
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function updatePost(Post $post)
    {

        $sql = "UPDATE `posts_table` SET  `date` = :date, `title` = :title, `content` = :content WHERE `posts_table`.`post_id` = :post_id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute( array(
            'date' => $post->getDate(),
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            //`post_id` => Get ID from Actual Post
            )
        );
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deletePostById(int $id): bool
    {
        $sql = "DELETE FROM `posts_table` WHERE `posts_table`.`post_id` = $id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    }
}