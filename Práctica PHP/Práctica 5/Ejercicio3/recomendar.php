<body>
    <?php $fecha=date("d-m-Y");
    $hora= date("H :i:s");
    $destino='To:' .$_POST['destino'];
    $asunto="Recomendación";
    $desde='From:' .$_POST['email'];
    $comentario= " Recomendación al sitio web ";

    mail($destino,$asunto,$comentario,$desde,[$headers]);
    echo "Gracias por recomendarnos!.";
?>