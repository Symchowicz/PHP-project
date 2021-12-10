<?php
 //SQL Posts 

?>

<h2>
    <?php //Get Title from Post ?>
</h2>



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
            echo($post->getContent());
            echo("<br>");
            echo($post->getImage());
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



<div>
    <div>
        <?php 



            /*
            --USER--
            Title         SELECT title FROM posts_table WHERE posts_table.post_id = ID
            Content       SELECT content FROM posts_table WHERE posts_table.post_id = ID
            Date          SELECT date FROM posts_table WHERE posts_table.post_id = ID
            First_Name    SELECT first_name FROM users_table WHERE user_table.user_id = ID
            Last_Name     SELECT last FROM users_table WHERE user_table.user_id = ID

            --POST AUTHOR--
            Delete post
            Modify post
            --ADMIN--
            Delete
            Modify
            */
        ?>
    </div>
    <div>
        <ul>
            <?php 
                    /*
                    --USER--
                    Comments ammount    SELECT COUNT(comment_id) FROM comments_table WHERE comment_table.post_id = ID
                    Comment             SELECT content FROM comments_table WHERE comment_table.post_id = ID

                    --COMMENT AUTHOR--
                    Delete comment  DELETE FROM comments_table WHERE comment_id = ID
                    Modify comment  UPDATE FROM comments_table WHERE comment_id = ID

                    --ADMIN--
                    Delete     DELETE FROM comments_table WHERE comment_id = ID
                    Modify     UPDATE FROM comments_table WHERE comment_id = ID
                    */
            ?>
        </ul>
    </div>
</div>


