<?php
    require("conexion.php");

    // borrar varios

    if(isset($_POST['btnDel3'])){

            if(empty($_POST['selecion'])){

                echo '<script>
                alert("No se ha hecho ninguna seleccion");
                window.history.go(-1);
                </script>';
    
            }else{

                foreach($_POST['selecion'] as $id_actualizar){

                    $sql2 = "DELETE FROM cronograma_actividades WHERE cronograma_actividades.id_cro_act = $id_actualizar";
                    $ActualizarCampos = $con->query($sql2);
        
                }

                echo '<script>
                alert("Se elimino correctamente");
                window.history.go(-1);
                </script>';
            }
    }else{

    // borrar uno

        $codigoAct=$_GET['id'];

        $sql3 = "DELETE FROM cronograma_actividades WHERE id_cro_act='$codigoAct' ";
        $consulta3 = mysqli_query($con, $sql3 );
        
        if($consulta3){
        
            echo '<script>
                    window.history.go(-1);
                </script>';
        
        }
    }
?>