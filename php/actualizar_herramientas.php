<?php

    require("conexion.php");
       
        $idHerramienta=$_POST['idHerramienta'];
        $nom_herra=$_POST['herra'];
        $encargado=$_POST['encargado'];
        $estado=$_POST['estado'];


        $sql2 = "UPDATE herramienta SET nombre_herramienta='$nom_herra', estado='$estado' WHERE idHerramienta='$idHerramienta'";
        $consulta2 = mysqli_query($con, $sql2);

            if($consulta2){
                
               header("location: ../profesores.php");
            }
           
?>