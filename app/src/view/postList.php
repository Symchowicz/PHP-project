<?php
 //SQL Posts List
?>

<h2>
    Posts List
</h2>

<div>
    <ul>
        <?php 
            use App\controllers\FrontController;
        ?>
        <div style="display:flex;flex-direction: column;">

            <?php 
            foreach ($posts as $post) {
                ?>
                <div style="margin:15px; border:3px solid black">
                    <?php
                        echo($post->getPost_Id());
                        echo("<br>");
                        echo($post->getDate());
                        echo("<br>");
                        echo($post->getTitle());
                        echo("<br>");
                        echo mb_strimwidth($post->getContent(), 0, 200, "...");
                        echo("<br>");
                        echo('<a href="/post/' . $post->getPost_Id() . '">Lire la suite</a>');
                        echo("<br>");
                        echo($post->getUser_Id());
                        echo("<br>");
                        /*echo($post->getFirstName());
                        echo("<br>");
                        echo($post->getLastName());
                        echo("<br>");*/
                        ?>
                        <div>
                            <input type="submit" name="Supprimer" class="button" value="Supprimer" />
                            <input type="submit" name="Modifier" class="button" value="Modifier" />
                        </div>
                </div>
                <?php
            }
            ?>
        </div>
    </ul>
</div>
<?php


?>