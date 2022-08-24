<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require And Include</title>
</head>

<body>
    <?php
    require "config.php";
    require_once "students.php";

    ?>
    <h2>Application name: <?= APPLICATION_NAME ?></h2>
    <?php include "students_table.php"; ?>
</body>

</html>