<?php
session_start();
?>
<html>
    <body>
        <a href="contador.php"></a>
        <?php
        echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <br>
        <a href="contador.php">Otra página</a>
    </body>
</html>