<?php
    require("conexion.php");

    if(isset($_POST['btnDel'])){

            if(empty($_POST['seleccion'])){

                echo '<script>
                alert("No se a echo ninguna seleccion");
                window.history.go(-1);
              </script>';
    
            }else{

              $fecha=$_POST['fecha'];
              $horas=$_POST['horas'];
                foreach($_POST['seleccion'] as $id_eliminacion){
            
                    $sqlDel=" INSERT INTO asistencia (id_usuario, estado, fecha_asistencia, horas) VALUES ('$id_eliminacion','Activo','$fecha','4')";
                    $borrarCampos = $con->query($sqlDel);
        
                }

                echo '<script>
                        alert("Eliminados");
                        window.history.go(-1);
                      </script>';
            }
    }

?>