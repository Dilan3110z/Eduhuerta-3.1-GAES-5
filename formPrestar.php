<?php

    require("php/conexion.php");

    $codigoAlumno = $_GET['id'];

    $sql4 = " SELECT * FROM herramienta WHERE idHerramienta='$codigoAlumno' ";
    $consulta4 = mysqli_query($con, $sql4);

    $campos = mysqli_fetch_assoc($consulta4);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Prestamo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style2.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body>
        <div>

            <form method="POST" action="php/actualizar.php" class="form-reg">
            <a href="Herramientas.php"><i class="fa-solid fa-arrow-left"></i></a>
                <center>
               
                    <h1>Formulario de prestamo</h1>
            <input class="ineput" type="hidden" name="idHerramienta" value="<?php echo $campos['idHerramienta'] ?>">
            <br>
            <br>
            <label for="nombre">Nombre y Apellidos</label><br><br>
            <input class="ineput" type="text" id="nombre" name="estudiante" value="<?php echo $campos['estudiante'] ?>">
            <br>
            <br>
            <label for="Dia">Dia</label><br><br>
            <input class="ineput" type="datetime-local" id="correo" name="Tiempo" value="<?php echo $campos['Tiempo'] ?>">
            <br><br>
            <input id="btnEnviar" type="submit" class="btn-neon" name="formBtnActu" value="ACTUALIZAR" />
            </center>
        </form>
    </div>
    </body>


</html>
