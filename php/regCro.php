<?php
include ('conexion.php');


if(isset($_POST['boton3']) && $_POST ['fecha_inicio']!="" && $_POST ['fecha_fin']!="" && $_POST ['id_labor_social']!=""&& $_POST ['id_zona']!=""){

        $fechaini = $_POST['fecha_inicio'];
        $fechafi = $_POST['fecha_fin'];
        $actividad = $_POST['id_labor_social'];
        $zona_idzona = $_POST['id_zona'];

$consulta_guardar="INSERT INTO cronograma_actividades (fecha_inicio, fecha_fin, id_labor_social, id_zona) VALUES ('$fechaini', '$fechafi', '$actividad', '$zona_idzona' );";
    $result_guardar=mysqli_query($con, $consulta_guardar);

    echo '<script>
           alert("Has registrado los datos solisitados");
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

mysqli_close($con);

?>