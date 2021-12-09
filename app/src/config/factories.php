<?php 

$dsn = "mysql:host=db";
$user = "root";
$pwd = "example";
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>  