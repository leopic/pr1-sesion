<?php

/**
 * Inicia una sesión en el servidor, si ya existía una la "refresca"
 * En caso no existir alguna anteriormente, la crea.
 * @see http://www.phpro.org/tutorials/Introduction-To-PHP-Sessions.html
 */

session_start();

/**
 * Podríamos pensar en la sesión como un diccionario persistente
 * através de distintas páginas.
 */
$_SESSION['hola'] = 'mundo';
$_SESSION['contador'] = 0;

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
        $active = "index";
        include("partials/_header.php");
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Inicio</h3>
        </div>
        <div class="panel-body">
            <pre><?php var_dump($_SESSION); ?></pre>
        </div>
    </div>
</div>
</body>
</html>
