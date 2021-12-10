    <div>
        <h1>Create Post</h1>
        <form method="post">
            <div>
                <label for="title">
                    Title :
                </label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="content">
                    Content :
                </label>
                <input type="text" id="content" name="content">
            </div>
            <input type="submit" name="button1"class="button" value="Button1" />
        </form>
    </div>
    


<?php 

   require("src/config/factories.php");

   use App\entity\Post;
   use App\models\PostManager;

    if(array_key_exists('button1', $_POST)) {
        button1();
    }

    function button1() {
        global $pdo;

        $PostManager = new PostManager($pdo);

        $date =$PostManager->RecupDate();
        $title =$PostManager->RecupTitle();
        $content =$PostManager->RecupContent();
        $user_id =$PostManager->RecupUser_Id();


        $stack = new Post($date, $title, $content, $user_id);

        $PostManager->createPost($stack);
    }

?>