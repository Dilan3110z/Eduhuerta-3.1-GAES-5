<?php

require("conexion.php");

$codigoAct = $_GET['id'];

$sql4 = " SELECT * FROM cronograma_actividades WHERE id_cro_act='$codigoAct' ";
$consulta4 = mysqli_query($con, $sql4);

$campos = mysqli_fetch_assoc($consulta4);
// para la triquiñuela
$sql3="SELECT id_labor_social FROM cronograma_actividades WHERE id_cro_act='$codigoAct'";

    $consulta3= $con->query($sql3);
    $data3=mysqli_fetch_assoc($consulta3);
    $nombre3= implode($data3);

$sql2="SELECT nombre FROM labor_social WHERE id_labor_social='$nombre3'";

    $consulta2= $con->query($sql2);
    $data2=mysqli_fetch_assoc($consulta2);
    $nombre= implode($data2);
// fin de la triquiñuela

?>

<!DOCTYPE html>
<html>

<head>
    <title>CONSULTA DE DATOS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style_modi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="actualizar" id="actualizar">

        <form method="POST" class="form-register">
            <a href="../profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
            <center>
                <h1>FORMULARIO DE ACTUALIZACION</h1>
                <input type="hidden" name="id_cro_act" value="<?php echo $campos['id_cro_act'] ?>">

                <input type="text" id="actividad" name="labor_social" class="controls" value="<?php echo $nombre?>" required>

                <input type="text" id="actividad" class="controls" name="fecha_inicio" value="<?php echo $campos['fecha_inicio'] ?>" required>

                <input type="text" id="actividad" class="controls" name="fecha_fin" value="<?php echo $campos['fecha_fin'] ?>" required>

                <select name="id_zona" id="nombre" class="controls">
                    <option value="<?php echo $campos['id_zona'] ?>"><?php echo $campos['id_zona'] ?></option>
                    <option value="1">Zona 1</option>
                    <option value="2">Zona 2</option>
                    <option value="3">Zona 3</option>
                    <option value="4">Zona 4</option>
                </select>

                <input id="btnEnviar" type="submit" class="btn-neon" name="formBtnActu" value="ACTUALIZAR" />
            </center>
        </form>
    </div>
    <?php

        if(isset($_POST['formBtnActu'])){

            $idcro=$_POST['id_cro_act'];
            $fechaini=$_POST['fecha_inicio'];
            $fechafi=$_POST['fecha_fin'];
            $actividad=$_POST['labor_social'];
            $zona_idzona=$_POST['id_zona'];

            $sql1="SELECT id_labor_social FROM labor_social WHERE nombre='$nombre'";

            $consulta1= $con->query($sql1);
            $data1=mysqli_fetch_assoc($consulta1);
            $nombre1= implode($data1);


            $sql0 = "UPDATE cronograma_actividades SET fecha_inicio='$fechaini', fecha_fin='$fechafi', id_zona='$zona_idzona' WHERE id_cro_act='$idcro'";
            $consulta0 = mysqli_query($con, $sql0);

            $sql6 = "UPDATE labor_social SET nombre='$actividad' WHERE id_labor_social='$nombre1'";
            $consulta6 = mysqli_query($con, $sql6);


                if($consulta0 && $consulta6){
                    
                    echo '<script>
                    alert("Se actualizo correctamente");
                    window.history.go(-2);
                    </script>';
                }
        }

?>
</body>


</html>