<?php
    function comprobar_nombre_usuario($nombre_usuario){    //Toma como parámetro el nombre de usuario
        //compruebo que el tamaño del string sea válido.
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){       // compara la longitud del parámetro con 3 y 20, si no está entre esos valores es True
            echo $nombre_usuario . " no es válido<br>";     // devuelve el parámetro junto al mensaje "no es válido"
            return false;
            }
        //compruebo que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
        for ($i=0; $i<strlen($nombre_usuario); $i++){                              //compara cada caracter del nombre de usuario con los de la variable permitidos
            if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){       //strpos encuentra la posición de la primera aparición de cada caracter, si algún caracter no se encuentra en permitidos devuelve true
                echo $nombre_usuario . " no es válido<br>";
                return false;
            }
        }
        echo $nombre_usuario . " es válido<br>";
        return true;
    }

    comprobar_nombre_usuario("cat_458");    //válido
    comprobar_nombre_usuario("+asdasdad+");   //inválido
    comprobar_nombre_usuario("as");   //inválido
    comprobar_nombre_usuario("agawgaewgw_agawegaw8578875");   //inválido

    ?>