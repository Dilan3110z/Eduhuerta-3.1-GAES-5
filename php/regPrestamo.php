<?php
    include ('conexion.php');
    
    if(isset($_POST['boton1'])){


            $documento = $_POST['doc'];
            $idHerramienta = $_POST['idHerramienta'];
            $fechaPres = $_POST['fechaPres'];

            $sql2="SELECT id_usuario FROM usuario WHERE documento='$documento'";

            $consulta2= $con->query($sql2);
            $data2=mysqli_fetch_assoc($consulta2);
            $idregistro= implode($data2);

    $consulta_guardar=" INSERT INTO historico_herramientas (id_usuario, id_inv_her,	fecha_entrega, fecha_devolucion) VALUES ('$idregistro', '$idHerramienta', '$fechaPres', '');";
        $result_guardar=mysqli_query($con, $consulta_guardar);


        echo '<script>
                alert("Prestamo exitoso");
                window.history.go(-1);
              </script>';
       exit;
    }else{
        echo '<script>
                alert("Falta Campos por diligenciar");
                window.history.go(-1);
                </script>';
        exit;
    }

    mysqli_close($con);
?>