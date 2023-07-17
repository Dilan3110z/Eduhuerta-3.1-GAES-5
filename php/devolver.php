<?php
include ('conexion.php');
    $idPrestamo=$_GET['id'];


    $sql1="DELETE FROM historico_herramientas WHERE historico_herramientas.id_his_her = $idPrestamo";
    $consulta2 = mysqli_query($con, $sql1);

    if($consulta2){

        echo '<script>
        window.history.go(-1);
        </script>';
    
    }

?>