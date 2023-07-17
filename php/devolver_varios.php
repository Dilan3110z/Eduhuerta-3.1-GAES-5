<?php
    require("conexion.php");

    if(isset($_POST['btnDel4'])){

            if(empty($_POST['selecion'])){

                echo '<script>
                alert("No se ha hecho ninguna seleccion");
                window.history.go(-1);
                </script>';
    
            }else{

                foreach($_POST['selecion'] as $idPrestamo){

                    $sql2 = "DELETE FROM herramientasporusuario WHERE herramientasporusuario.idHerramientasUsuario = $idPrestamo";
                    $ActualizarCampos = $con->query($sql2);
        
                }

                echo '<script>
                alert("devolución exitosa");
                window.history.go(-1);
                </script>';
            }
    }

?>