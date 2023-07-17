<?php
    
    //variables para establecer la conexion

    $servidorBD = "localhost";
    $usuarioBD = "root";
    $contrasenaBD = "";

    $nombreBD = "huertabdv3.1";


    //variable que contiene los datos para la conexion
    $con = new mysqli($servidorBD, $usuarioBD, $contrasenaBD, $nombreBD);

    //configuracion manjeo de caracteres
    mysqli_query($con, "SET NAMES 'utf8'");

    //funcion de configuracion de idioma y tipos de caracter
    mysqli_set_charset($con, "UTF8");

    
    //condicion de verificacion de la conexion
    if(mysqli_connect_errno()){
        
        echo "no se pudo establecer conexion con la base de datos";
        
    }
    
    //funcion que selecciona la base de datos
    mysqli_select_db($con, $nombreBD) or die ("no se encontro la base de datos en el servidor");

?>