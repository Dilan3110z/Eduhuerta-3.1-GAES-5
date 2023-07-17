<?php

    require("conexion.php");

    $codigoAlumno = $_GET['id'];

    $sql4 = " SELECT * FROM herramienta WHERE idHerramienta='$codigoAlumno' ";
    $consulta4 = mysqli_query($con, $sql4);

    $campos = mysqli_fetch_assoc($consulta4);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>CONSULTA DE DATOS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style_modih.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body>

            <form method="POST" action="actualizar_herramientas.php" class="form_reg">
            <a href="../profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
                <center>
               
            <h1>FORMULARIO DE MODIFICACIÓN</h1>
            <input type="hidden" name="idHerramienta" class="control" value="<?php echo $campos['idHerramienta'] ?>">
            <br>
            <label for="nombre">Nombre Herramienta</label><br><br>
            <input type="text" id="nombre" name="herra" class="control" value="<?php echo $campos['nombre_herramienta'] ?>" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){3})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{3,15}" required>
            <br>
            <label for="nombre">Estado</label><br><br>
            <select name="estado" id="estado" class="control">
                <option value="<?php echo $campos['estado'] ?>"><?php echo $campos['estado'] ?></option>
                <option value="Bueno">Bueno</option>
                <option value="Medio">Medio</option>
                <option value="Malo">Malo</option>
            </select>
            <br>
            <br>
            <input id="btnEnviar" type="submit" class="btn-neon" name="formBtnActu" value="ACTUALIZAR" />
            </center>
        </form>
    </div>
    </body>


</html>
