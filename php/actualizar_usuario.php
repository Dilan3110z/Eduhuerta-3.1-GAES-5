<?php

    require("conexion.php");
       
        $idregistro=$_POST['id'];
        $Nombre_y_Apellidos=$_POST['Nombre_y_Apellidos'];
        $curso=$_POST['curso'];
        $jornada=$_POST['jornada'];
        $Documento_de_identidad=$_POST['Documento_de_identidad'];
        $Horas=$_POST['Horas'];

        $sql2 = "UPDATE usuario SET Nombre_y_Apellidos='$Nombre_y_Apellidos', curso='$curso', jornada='$jornada', Documento_de_identidad='$Documento_de_identidad', Horas='$Horas' WHERE idregistro='$idregistro'";
        $consulta2 = mysqli_query($con, $sql2);

            if($consulta2){
                
               header("location: ../profesores.php");
            }
           
?>