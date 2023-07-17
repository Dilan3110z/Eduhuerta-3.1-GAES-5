<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_actividad.css">
    <title>Actividades</title>
    <?php
    include "php/conexion.php";
    session_start(); ?>
</head>

<body>
    <div class="details3">
        <div class="recentOrders">
            <div class="cardHeader">
                <center>
                    <h2>Actividades</h2>
                </center>
                <div class="list">
                    <div class="user">
                    </div> 
                    <div class="navigation1">
                        <a class="button" href="profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
                        <button class="button" id="open"><i class="fa-solid fa-add"></i></button>

                        <div class="modal-container" id="modal_container">
                            <div class="modal">
                                <form action="php/regCro.php" method="POST" name="formDatosPersonales" id="formReg" class="form-register">

                                    <center>
                                        <h5>Formulario de actividades</h5>

                                        <div class="form_grupo" id="form_Nombre">
                                            <input type="text" name="actividad" class="controls" placeholder="actividad zona 1" id="actividad"><br>
                                            <input type="text" name="actividad2" class="controls" placeholder="actividad zona 2" id="actividad"><br>
                                            <input type="text" name="actividad3" class="controls" placeholder="actividad zona 3" id="actividad"><br>
                                            <input type="text" name="actividad4" class="controls" placeholder="actividad zona 4" id="actividad"><br>
                                        </div>

                                        <input type="submit" name="boton" class="btn-neon" value="Registrate">

                                </form>
                                </center>
                                <a id="close" class="cosa">Cerrar</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <form method="POST">
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tiempo</td>
                            <td>Zona</td>
                            <td>actividad</td>

                        </tr>
                    </thead>
                    <?php

                    $sqlMod = " SELECT * FROM cronograma_actividades ";
                    $datosMod = mysqli_query($con, $sqlMod);

                    while ($campoMod = mysqli_fetch_assoc($datosMod)) {
                    ?>
                        <tbody>
                            <tr>

                                <td><input name="idcro[<?php echo $campoMod['idcro'] ?>]" value="<?php echo $campoMod['idcro'] ?>" class="controlar"></td>
                                <td><input type="datetime-local" name="Tiempo[<?php echo $campoMod['idcro'] ?>]" value="<?php echo $campoMod['fechaEntrega'] ?>"></td>
                                <td><input name="zona1[<?php echo $campoMod['idcro'] ?>]" value="<?php echo $campoMod['numZona']?>" class="controlar"></td>
                                <td><input name="zona1[<?php echo $campoMod['idcro'] ?>]" value="<?php echo $campoMod['actividad']?>" class="controlar"></td>
                            </tr>
                        <?php
                    }
                        ?>
                        <tr>
                            <td>
                                <input type="submit" class="si" name="btnCam" value="ACTUALIZAR" />
                            </td>
                        </tr>
                        </tbody>
                </table>
            </form>
            <?php

            if (isset($_POST['btnCam'])) {

                foreach ($_POST['idcro'] as $id_cambio) {

                    $editid = mysqli_real_escape_string($con, $_POST['idcro'][$id_cambio]);
                    $Tiempo = mysqli_real_escape_string($con, $_POST['Tiempo'][$id_cambio]);
                    $zona1 = mysqli_real_escape_string($con, $_POST['zona1'][$id_cambio]);
                    $zona2 = mysqli_real_escape_string($con, $_POST['zona2'][$id_cambio]);
                    $zona3 = mysqli_real_escape_string($con, $_POST['zona3'][$id_cambio]);
                    $zona4 = mysqli_real_escape_string($con, $_POST['zona4'][$id_cambio]);

                    $actualizar = $con->query("UPDATE actividad SET idcro='$editid', Tiempo='$Tiempo', zona1='$zona1', zona2='$zona2', zona3='$zona3', zona4='$zona4' WHERE idcro='$id_cambio'");
                }
                if ($actualizar == true) {
                    echo '<script>
                            alert("Se a actualizado correctamente");
                            location.href = "actividades.php";
                          </script>';
                } else {
                    echo '<script>
                            alert("no se pudo");
                            location.href = "actividades.php";
                          </script>';
                }
            }
            ?>
        </div>
    </div>


    <script>
        let navigation = document.querySelector('.navigation');
        navigation.onclick = function() {
            navigation.classList.toggle('active');
        }
    </script>
    <script src="js/apps.js"></script>
</body>

</html>