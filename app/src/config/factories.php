<?php
    $user = 'root';
    $pass = 'example';
    try {
        $dbh = new PDO('mysql:host=db;dbname=CMS', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query("SELECT * FROM users_table");
        print_r($row);
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        echo("Miaou");
        die();
    }
?>

<?php 

$dsn = "mysql:host=db";
$user = "root";
$pwd = "example";
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



/*echo("miaou");
echo("<br>");

$requete = $pdo->query("SELECT * FROM `CMS`.`users_table`");


echo("miaou");
echo("<br>");

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
    echo("miaou");
    echo("<br>");

}

echo("miaou");
echo("<br>");*/

?>