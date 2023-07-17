<?php
include ('conexion.php');

        $nombre = $_POST['nombre_herramienta'];
        $estado = $_POST['estado'];
        $dispo = $_POST['disponibilidad'];

$consulta_guardar=" INSERT INTO inventario_herramientas (nombre, id_est_her, disponibilidad) VALUES ('$nombre', '$estado', '$dispo')";

        echo mysqli_query($con, $consulta_guardar);

        if( $consulta_guardar){
                
                echo '<script>
                alert("Registro exitoso");
                window.history.go(-1);
                </script>';
        }
mysqli_close($con);

?>