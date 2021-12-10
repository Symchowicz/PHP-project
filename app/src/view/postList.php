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
        for($i=0; $i<count($vars); $i++){
            ?>
            <div style="margin:15px; border:3px solid black">
                <?php
                echo($vars[$i]["post_id"]);
                echo("<br>");
                echo($vars[$i]["date"]);
                echo("<br>");
                echo($vars[$i]["title"]);
                echo("<br>");
                echo mb_strimwidth($vars[$i]["content"], 0, 200, "...");
                echo("<br>");
                echo("<a href='show'>Lire la suite</a>");
                echo("<br>");
                echo($vars[$i]["user_id"]);
                echo("<br>");
                echo($vars[$i]["first_name"]);
                echo("<br>");
                echo($vars[$i]["last_name"]);
                echo("<br>");
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