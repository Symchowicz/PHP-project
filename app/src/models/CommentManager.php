<?php

namespace App\models;

use App\entity\Comment;
use App\controllers\BaseController;


class CommentManager extends BaseManager
{

    public function getCommentById(int $id)
    {
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`comments_table` WHERE `comments_table`.`post_id`=$id");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\Comment::class);

    }

    /**
     * @param Comment $comment
     * @return Comment|bool
     */
    public function createComment(Comment $comment): bool
    {   

        $requete = $this->pdo->prepare("INSERT INTO `CMS`.`comments_table` (`Comment_id`, `date`, `title`, `content`, `user_id`) VALUES (NULL, :date, :title, :content, :user_id)");
        $requete->execute( array(
            'date' => $comment->getDate(),
            'title' => $comment->getTitle(),
            'content' => $comment->getContent(),
            'user_id' => $comment->getUser_Id()
            )
        );
        return true;
    }

    /**
     * @param Comment $comment
     * @return Comment|bool
     */
    public function updateComment(Comment $comment) : bool 
    {

        $sql = "UPDATE `comments_table` SET  `date` = :date, `title` = :title, `content` = :content WHERE `comments_table`.`Comment_id` = :Comment_id";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute( array(
            'date' => $comment->getDate(),
            'title' => $comment->getTitle(),
            'content' => $comment->getContent(),
            //`Comment_id` => Get ID from Actual Comment
            )
        );
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteCommentById(int $id): bool
    {
        $sql = "DELETE FROM `comments_table` WHERE `comments_table`.`comment_id` = $id";
        $stmt= $this->$pdo->prepare($sql);
        $stmt->execute();

        return true;
    }

}
?>