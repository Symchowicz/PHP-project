<?php
    $title = "CMS MVC";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <?php

        require "Config/Controller/controller.php";

        use Controller\FrontController;

        $test = new FrontController("show", [0,1,2]);

        $test2 = $test->executeIndex(5);
    ?>
</body>
</html>