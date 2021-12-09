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
        require("src/config/factories.php");   
        $requete = $pdo->query("SELECT * FROM `CMS`.`posts_table` , `CMS`.`users_table` WHERE `posts_table`.`user_id`=1");

        ?>
        <div style="display:flex;flex-direction: column;">
        <?php
    
        while($data = $requete->fetch()){
            ?>
            <div style="margin:15px; border:3px solid black">
                <?php
                echo($data["post_id"]);
                echo("<br>");
                echo($data["date"]);
                echo("<br>");
                echo($data["title"]);
                echo("<br>");
                echo mb_strimwidth($data["content"], 0, 200, "...");
                echo("<br>");
                echo("<a href=''>Lire la suite</a>");
                echo("<br>");
                echo($data["user_id"]);
                echo("<br>");
                echo($data["first_name"]);
                echo("<br>");
                echo($data["last_name"]);
                echo("<br>");
                ?>
            </div>
            <?php
        }
        ?>
        </div>
        <?php
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