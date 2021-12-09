<?php
 /*    $user = 'root';
    $pass = 'example';
    try {
        $dbh = new PDO('mysql:host=db;dbname=CMS', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stock = $dbh->query("SELECT * FROM `CMS`.`users_table`");
        print_r($stock);
        $dbh = null;
        echo("Miaou");
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        echo("WOUF");
        die();
    }

    echo("FIN");
    echo("<br>"); */
?>


<?php 

$dsn = "mysql:host=db";
$user = "root";
$pwd = "example";
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $pdo->query("SELECT * FROM `CMS`.`users_table`");

while($data = $requete->fetch()){

    echo($data["users_id"]);
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
?>  