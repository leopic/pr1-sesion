<?php

session_start();

$_SESSION['contador']++;
$contador = $_SESSION['contador'];

//$_SESSION['adios'] = 'chau';
//unset($_SESSION['adios']);
//$despedida = $_SESSION['adios'];
//echo("eh? $despedida! <br/>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Uno: Ejemplo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <?php
        $active = "uso";
        include("partials/_header.php");
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Uso</h3>
        </div>
        <div class="panel-body">
            <pre><?php var_dump($_SESSION); ?></pre>
        </div>
    </div>
</div>
</body>
</html>
