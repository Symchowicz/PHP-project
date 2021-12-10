<?php
 //SQL Posts 

?>

YOOOOOOOOOOOOOOOOOOO

<h2>
    <?php //Get Title from Post ?>
</h2>

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


