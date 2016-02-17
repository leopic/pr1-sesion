<?php
/**
 * _header.php
 */

?>

<div class="page-header text-center">
    <h1>Sesión</h1>
    <ul class="nav nav-pills">
        <li <?php if ($active == "index") {?> class="active" <?php } ?>>
            <a href="index.php">Inicio</a>
        </li>
        <li <?php if ($active == "revision") {?> class="active" <?php } ?>>
            <a href="revision.php">Revision</a>
        </li>
        <li <?php if ($active == "uso") {?> class="active" <?php } ?>>
            <a href="uso.php">Uso</a></li>
        <li <?php if ($active == "cierre") {?> class="active" <?php } ?>>
            <a href="cierre.php">Cierre</a>
        </li>
    </ul>
</div>