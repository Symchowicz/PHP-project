<?php 

$dsn = "mysql:host=db";
$user = "root";
$pwd = "example";
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $pdo->query("SELECT * FROM `CMS`.`users_table`");

while($data = $requete->fetch()){

    echo($data["user_id"]);
    echo("<br>");
    echo($data["first_name"]);
    echo("<br>");
    echo($data["last_name"]);
    echo("<br>");
    echo($data["email"]);
    echo("<br>");
    echo($data["is_admin"]);
    echo("<br>");
    echo($data["password"]);
    echo("<br>");

}

/*
INSERT INTO `users_table` (`users_id`, `first_name`, `last_name`, `email`, `is_admin`, `password`) VALUES (NULL, 'Maxence', 'Nho', 'max.elite.9394@gmail.com', '1', '123')
*/
?>  