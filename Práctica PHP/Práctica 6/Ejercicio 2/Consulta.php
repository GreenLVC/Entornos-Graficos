<html>
<head>
<title> Listados completo </title>
</head>
<body>
    <?php
        include("conexion.inc");
        $vSql = "SELECT * FROM ciudades";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        ?>
        <table border=1>
            <tr>
                <td><b>ID</b></td>
                <td><b>Ciudad</b></td>
                <td><b>Pais</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Superficie</b></td>
                <td><b>Tiene Metro</b></td>
            </tr>
            <?php
            while ($fila = mysqli_fetch_array($vResultado))
            {
                ?>
                <tr>
                    <td><?php echo ($fila['Id']); ?></td>
                    <td><?php echo ($fila['Ciudad']); ?></td>
                    <td><?php echo ($fila['Pais']); ?></td>
                    <td><?php echo ($fila['Habitantes']); ?></td>
                    <td><?php echo ($fila['Superficie']); ?></td>
                    <td><?php echo ($fila['TieneMetro']); ?></td>
                </tr>
                <tr>
                    <td colspan="5">
                <?php
            }
                    // Liberar conjunto de resultados
                    mysqli_free_result($vResultado);
                    // Cerrar la conexion
                    mysqli_close($link);
                    ?>
                    </td>
                </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>