<?php
    $user = 'root';
    $pass = 'example';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=CMS', $user, $pass);
        foreach($dbh->query('SELECT * from *') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>