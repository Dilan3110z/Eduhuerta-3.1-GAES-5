<?php

    require("conexion.php");

    $idHerra=$_GET['id'];

    $sql3 = "DELETE FROM inventario_herramientas WHERE id_inv_her='$idHerra' ";
    $consulta3 = mysqli_query($con, $sql3 );
    
    if($consulta3){
       
    echo '<script>window.history.go(-1);</script>';
    }
    

?>
