<?php

namespace App\models\BaseManager;

require('App/src/config/factories.php');

use App\Entity\Post;
use App\controllers\BaseController;

class PostManager extends BaseManager
{


    /**
     * @return Post[]
     */
    public function getAllPosts(): array
    {
        $requete = $pdo->query("SELECT * FROM `CMS`.`posts_table`");

        while($data = $requete->fetch()){

            echo($data["post_id"]);
            echo("<br>");
            echo($data["date"]);
            echo("<br>");
            echo($data["title"]);
            echo("<br>");
            echo($data["content"]);
            echo("<br>");
            echo($data["user_id"]);
            echo("<br>");
        }
    }

    public function getPostById(int $id): Post
    {
        $requete = $pdo->query("SELECT * FROM users_table, posts_table WHERE post_id = $id");

        while($data = $requete->fetch()){

            echo($data["post_id"]);
            echo("<br>");
            echo($data["date"]);
            echo("<br>");
            echo($data["title"]);
            echo("<br>");
            echo($data["content"]);
            echo("<br>");
            echo($data["user_id"]);
            echo("<br>");
        }
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function createPost(Post $post)
    {
        $post_id= $post[0];
        $date=$post[1];
        $title=$post[2];
        $content=$post[3];
        $user_id=$post[4];

        $sql = "INSERT INTO `posts_table` (`post_id`, `date`, `title`, `content`, `user_id`) VALUES ($post_id, $date, $title, $content, $user_id)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();

        return true;
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function updatePost(Post $post)
    {
        $post_id= $post[0];
        $date=$post[1];
        $title=$post[2];
        $content=$post[3];
        $user_id=$post[4];

        $sql = "UPDATE `posts_table` SET  `date` = $date, `title` = $title, `content` = $content, `user_id` = $user_id WHERE `posts_table`.`post_id` = $post_id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deletePostById(int $id): bool
    {
        $sql = "DELETE FROM `posts_table` WHERE `posts_table`.`post_id` = $post_id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    }
}