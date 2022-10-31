<head>
<title>Modificacion</title>
</head>
<body>
    <?php
        include ("conexion.inc");
        //Captura datos desde el Form anterior
        $vId= $_POST['Id'];
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHabitantes = $_POST['Habitantes'];
        $vSuperficie = $_POST['Superficie'];
        $vTieneMetro = $_POST['TieneMetro'];
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "UPDATE ciudades set Id='$vId', Ciudad='$vCiudad', Pais='$vPais', Habitantes='$vHabitantes', Superficie='$vSuperficie', TieneMetro='$vTieneMetro' where
        Id='$vId'";
        mysqli_query($link,$vSql) or die (mysqli_error($link));
        echo("El Usuario fue Modificado<br>");
        echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
        // Cerrar la conexion
        mysqli_close($link);
    ?>
</body>
</html