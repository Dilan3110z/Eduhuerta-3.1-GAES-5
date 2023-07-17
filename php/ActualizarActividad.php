<?php

    require("conexion.php");
       
        $idCro=$_POST['idCro'];
        $zona1=$_POST['zona1'];
        $Tiempo=$_POST['Tiempo'];

        $sql2 = "UPDATE cronograma SET idCro='$idCro', zona1='$zona1', Tiempo='$Tiempo' WHERE idCro='$idCro'";
        $consulta2 = mysqli_query($con, $sql2);

            if($consulta2){
                
               header("location: ../listado_est.php");
            }
           
?>