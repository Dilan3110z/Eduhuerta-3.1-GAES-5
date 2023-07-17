<?php

    require("conexion.php");

    $codigoEst=$_GET['id'];

    $sql3 = "DELETE FROM usuario WHERE documento='$codigoEst' ";
    $consulta3 = mysqli_query($con, $sql3 );
    
    if($consulta3){
       
        echo '<script>
                window.history.go(-1);
              </script>';
    
    }
    

?>
