<title>Modificacion</title>
</head>
<body>
    <?php
        include ("conexion.inc");
        //Captura datos desde el Form anterior
        $vId = $_POST['Id'];
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT * FROM Ciudades WHERE Id ='$vId' ";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $fila = mysqli_fetch_array($vResultado);
        if(mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente...!!! <br>");
        echo ("<A href='FormModiIni.html'>Continuar</A>");
        }
        else{
    ?>
    <FORM action="Modi.php" method="POST" name="FormModi">
        <table width="356">
            <tr>
                <td width="103"> Nombre: </td>
                <td width="243"> <input type="text" name="Nombre" value="<?php
                echo($fila['Id']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Ciudad: </td>
                <td width="243"> <input type="TEXT" name="Ciudad" size="20" maxlength="20"
                value="<?php echo($fila['Ciudad']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Pais: </td>
                <td width="243"> <input type="TEXT" name="Pais" size="20" maxlength="20"
                value="<?php echo($fila['Pais']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Habitantes: </td>
                <td width="243"> <input type="TEXT" name="Habitantes" size="20" maxlength="40"
                value="<?php echo($fila['Habitantes']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Superficie: </td>
                <td width="243"> <input type="TEXT" name="Superficie" size="20" maxlength="40"
                value="<?php echo($fila['Superficie']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Tiene Metro?: </td>
                <td width="243"> <input type="TEXT" name="TieneMetro" size="20" maxlength="40"
                value="<?php echo($fila['TieneMetro']); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
                value="Modificar">
                </td>
            </tr>
        </table>
    </FORM>
</body>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>