<?php
    
    require("conexion.php");


    if (!preg_match("", $_POST['Nombre_y_Apellidos'])) {
        echo '<script>
                alert("Eso no se asé");
                window.history.go(-1);
                </script>';
        exit();
    }

    if (!preg_match("", $_POST['Documento_de_identidad'])) {
        echo '<script>
                alert("Eso no se asé");
                window.history.go(-1);
                </script>';
        exit();
    }

    if (!preg_match("", $_POST['Contrasena'])) {
        echo '<script>
                alert("Eso no se asé");
                window.history.go(-1);
                </script>';
        exit();
    }

    if (!preg_match("", $_POST['Confirmacion'])) {
        echo '<script>
                alert("Eso no se asé");
                window.history.go(-1);
                </script>';
        exit();
    }


    if(isset($_POST['boton']) && $_POST ['Nombre_y_Apellidos']!=""  && $_POST ['curso']!=""  && $_POST ['jornada']!=""  && $_POST ['Documento_de_identidad']!="" && $_POST ['Contrasena']!="" && $_POST ['Confirmacion']!="" ){


        $Nombre_y_Apellidos = $_POST['Nombre_y_Apellidos'];
        $curso = $_POST['curso'];
        $jornada = $_POST['jornada'];
        $Documento_de_identidad = $_POST['Documento_de_identidad'];

        $Contrasena = $_POST['Contrasena'];
        $Confirmacion = $_POST['Confirmacion'];
        $encriptada = password_hash($Contrasena, PASSWORD_DEFAULT);

$consulta_guardar=" INSERT INTO usuario (Nombre_y_Apellidos, curso, jornada, Documento_de_identidad, Contrasena, Confirmacion, 	rol_idrol ) VALUES ('$Nombre_y_Apellidos', '$curso', '$jornada', '$Documento_de_identidad', '$encriptada', '$Confirmacion', '1')";
    $result_guardar=mysqli_query($con, $consulta_guardar);

     echo '<script>
           location.href = "../profesores.php";
           </script>';
   exit;
}else{
    echo '<script>
            alert("Falta Campos por diligenciar");
            window.history.go(-1);
            </script>';
    exit;
}



?>
