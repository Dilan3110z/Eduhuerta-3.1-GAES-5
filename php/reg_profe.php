<?php
    include ('conexion.php');


    if(isset($_POST['boton']) && $_POST ['nombres']!=""  && $_POST ['Jornada']!=""  && $_POST ['Documento_de_identidad']!="" && $_POST ['Contrasena']!="" && $_POST ['Confirmacion']!="" ){

            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $jornada = $_POST['Jornada'];
            $Documento_de_identidad = $_POST['Documento_de_identidad'];
            $Contrasena = $_POST['Contrasena'];
            $Confirmacion = $_POST['Confirmacion'];
            $encriptada = password_hash($Contrasena, PASSWORD_DEFAULT);

    $consulta_guardar="INSERT INTO usuario (nombres,apellidos,jornada,documento,contrasena,estado,id_rol,id_curso,id_cro_act) VALUES ('$nombres','$apellidos','$jornada','$Documento_de_identidad','$encriptada','activo',1,1,1)";
        $result_guardar=mysqli_query($con, $consulta_guardar);

        echo '<script>
            location.href = "../Inicio_sesion.php";
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