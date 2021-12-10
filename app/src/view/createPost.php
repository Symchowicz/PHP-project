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
            <div>
                Vous pouvez choisir une image<br>
                <input type="file" name="image" size="40">
            </div>
            <input type="submit" name="button1"class="button" value="Button1" />
        </form>
    </div>
    


<?php 
   use App\entity\Post;
   use App\models\PostManager;
   use App\config\PDOFactory;

    if(array_key_exists('button1', $_POST)) {
        button1();
    }

    function button1() {
        global $pdo;

        $PostManager = new PostManager(PDOFactory::getMysqlConnection());
        $stack2= new Post();

        
        $PostManager->SetInfosPost($stack2, $PostManager);
        $PostManager->createPost($stack2);

    }

?>