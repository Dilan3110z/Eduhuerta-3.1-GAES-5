<?php
    require("conexion.php");

    if(isset($_POST['btnDel2'])){

            if(empty($_POST['selecion'])){

                echo '<script>
                alert("No se ha hecho ninguna seleccion");
                window.history.go(-1);
                </script>';
    
            }else{

                foreach($_POST['selecion'] as $id_actualizar){

                    $sql2 = "DELETE FROM cronograma_actividades WHERE idcro = $id_actualizar";
                    $ActualizarCampos = $con->query($sql2);
        
                }

                echo '<script>
                window.history.go(-1);
                </script>';
            }
    }

?>