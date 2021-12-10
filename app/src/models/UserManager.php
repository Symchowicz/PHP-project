<?php

namespace App\models;

<<<<<<< Updated upstream
use App\entity\User;
=======
use App\entity\Post;
>>>>>>> Stashed changes
use App\controllers\BaseController;


class UserManager extends BaseManager
{  
    //Récupérer les infos//

    public function RecupUser_Id(){
        $user_id = $_POST['user_id'];

        return $user_id;
    }

    public function RecupFirst_Name(){
        $first_name = $_POST['first_name'];

        return $first_name;
    }

    public function RecupLast_Name(){
        $last_name = $_POST['last_name'];

        return $last_name;
    }

    public function RecupEmail(){
        $email = $_POST['email'];

        return $email;
    }

    public function RecupIs_Admin(){
        $is_admin = $_POST['is_admin'];

        return $is_admin;
    }

    public function RecupPassword(){
        $password = $_POST['password'];

        return $password;
    }

<<<<<<< Updated upstream
    /**
     * @return User[]
     */
=======
>>>>>>> Stashed changes
    public function getAllUsers()
    {
        
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`users_table`");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\User::class);
    }

<<<<<<< Updated upstream
    public function getUserById(int $id)
    {
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`users_table` WHERE `users_table`.`user_id` = $id");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\User::class);

    }

    /*public function getUserByPostId(int $postId)
    {
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`users_table` INNER JOIN `CMS`.`posts_table` ON `users_table`.`user_id` = `posts_table`.`user_id` WHERE `posts_table`.`user_id` = $posId");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\User::class);

    }

    public function getUserByCommentId(int $commentId)
    {
        $requete = $this->pdo->query("SELECT * FROM `CMS`.`users_table` INNER JOIN `CMS`.`comments_table` ON `users_table`.`user_id` = `comments_table`.`user_id` WHERE `posts_table`.`user_id` = $commentId");
        return $requete->fetchAll(\PDO::FETCH_CLASS, \App\entity\User::class);

    }*/

    /**
     * @param User $user
     * @return User|bool
     */
    public function createUser(User $user): bool
    {   

        $requete = $this->pdo->prepare("INSERT INTO `CMS`.`users_table` (`user_id`, `date`, `title`, `content`, `user_id`) VALUES (NULL, :date, :title, :content, :user_id)");
        $requete->execute( array(
            'date' => $user->getDate(),
            'title' => $user->getTitle(),
            'content' => $user->getContent(),
            'user_id' => $user->getUser_Id()
            )
        );
        return true;
    }

    /**
     * @param User $user
     * @return User|bool
     */
    public function updateUser(User $user) : bool 
    {

        $sql = "UPDATE `users_table` SET  `date` = :date, `title` = :title, `content` = :content WHERE `users_table`.`user_id` = :User_id";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute( array(
            'date' => $user->getDate(),
            'title' => $user->getTitle(),
            'content' => $user->getContent(),
            //`user_id` => Get ID from Actual User
            )
        );
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteUserById(int $id): bool
    {
        $sql = "DELETE FROM `users_table` WHERE `users_table`.`user_id` = $id";
        $stmt= $this->$pdo->prepare($sql);
        $stmt->execute();

        return true;
=======
    public function setBdd()
    {
        $first_name = $_POST["firstName"];
        $last_name = $_POST["lastName"];
        $email = $_POST["email"];
        $is_admin = $_POST["is_admin"];
        $password = $_POST["password"];

        $requete = $this->pdo->query(
            "INSERT INTO`CMS`.`users_table` (first_name, last_name,email, is_admin, password)
        VALUES ($first_name, $last_name, $email,$is_admin,$password)"
        );
>>>>>>> Stashed changes
    }
    
}