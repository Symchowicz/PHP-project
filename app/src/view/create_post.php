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
            <button>Post it</button>
        </form>
    </div>

    <button>Créer</button>


    <?php 

        use App\entity\Post;
        use App\models\BaseManager\PostManager;

        $dsn = "mysql:host=db";
        $user = "root";
        $pwd = "example";
        $pdo = new PDO($dsn, $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* $title = $_POST['title'];
        echo($title);
        $content = $_POST['content'];

        echo($content); */

        $test = new Post("tite", "contenu", "post_id", "user_id", "date");

        


        createPost($test);

        getAllPosts();


    ?>