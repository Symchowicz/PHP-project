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
            echo($post->getAuthor());
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

foreach ($comments as $comment) {
    ?>
    <div style="margin:15px; border:3px solid black">
        <?php
            echo($comment->getComment_Id());
            echo("<br>");
            echo($comment->getDate());
            echo("<br>");
            echo($comment->getUser_Id());
            echo("<br>");
            echo($comment->getContent());
            echo("<br>");
            echo($comment->getPost_Id());
            echo("<br>");
            /*echo($comment->getFirstName());
            echo("<br>");
            echo($comment->getLastName());
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