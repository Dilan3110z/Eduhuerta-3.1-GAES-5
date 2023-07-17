<?php
include ('conexion.php');

        $nombre = $_POST['nombre_herramienta'];
        $imagen = fopen($_FILES['imagen']['tmp_name'], 'r');
        $total = $_POST['total'];

$consulta_guardar=" INSERT INTO herramienta (nombre_herramienta, img, total) VALUES ('$nombre', '$imagen', '$total')";
    $result_guardar=mysqli_query($con, $consulta_guardar);


if($result_guardar){
        echo'si';
}else{
        echo'no';
}

mysqli_close($con);

?>