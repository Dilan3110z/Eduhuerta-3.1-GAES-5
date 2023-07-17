<?php

require("conexion.php");

$codigoAlumno = $_GET['id'];

$sql4 = " SELECT * FROM usuario WHERE documento='$codigoAlumno' ";
$consulta4 = mysqli_query($con, $sql4);

$campos = mysqli_fetch_assoc($consulta4);

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

        <form method="POST" action="actualizar_usuario.php" class="form-register">
            <a href="../profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
            <center>
                <h1>FORMULARIO DE ACTUALIZACION</h1>
                <input type="hidden" name="id" value="<?php echo $campos['idregistro'] ?>">

                <input type="text" id="nombre" name="Nombre_y_Apellidos" class="controls" value="<?php echo $campos['Nombre_y_Apellidos'] ?>">

                <select name="curso" id="nombre" class="controls">
                    <option value="<?php echo $campos['curso'] ?>"><?php echo $campos['curso'] ?></option>
                    <option value="901">901</option>
                    <option value="902">902</option>
                    <option value="903">903</option>
                    <option value="904">904</option>
                    <option value="905">905</option>
                    <option value="906">906</option>

                    <option value="1001">1001</option>
                    <option value="1002">1002</option>
                    <option value="1003">1003</option>
                    <option value="1004">1004</option>
                    <option value="1005">1005</option>

                    <option value="1101">1101</option>
                    <option value="1102">1102</option>
                    <option value="1103">1103</option>
                    <option value="1104">1104</option>
                </select>

                <select name="jornada" id="jornada" class="controls">
                    <option value="<?php echo $campos['jornada'] ?>"><?php echo $campos['jornada'] ?></option>
                    <option value="mañana">Mañana</option>
                    <option value="tarde">Tarde</option>
                </select>

                <input type="text" id="nota" class="controls" name="Documento_de_identidad" value="<?php echo $campos['Documento_de_identidad'] ?>">

                <input type="text" id="clase" class="controls" p name="Horas" value="<?php echo $campos['Horas'] ?>" placeholder="Horas Sociales">

                <input id="btnEnviar" type="submit" class="btn-neon" name="formBtnActu" value="ACTUALIZAR" />
            </center>
        </form>
    </div>
</body>


</html>