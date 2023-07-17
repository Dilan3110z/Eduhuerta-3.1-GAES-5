<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_actu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>listado</title>
    <?php
    include "php/conexion.php";
    session_start(); ?>
</head>

<body>
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <center>
                    <h2>Lista Estudiantes</h2>
                </center>
                <div class="list">
                    <div class="user">
                    </div>
                    <div class="navigation">

                        <button class="button" id="open"><i class="fa-solid fa-add"></i></button>

                        <div class="modal-container" id="modal_container">
                            <div class="modal">
                                <form action="php/almacenarDatosUsuario.php" method="POST" name="formDatosPersonales" id="formReg" class="form-register">

                                    <center>
                                        <h5>Formulario de registro</h5>

                                        <input text="text" id="codigo" name="Nombre_y_Apellidos" required class="controls" placeholder="Nombre y apellidos">

                                        <select name="Curso" id="nombre" class="controls">
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
                                            <option value="1101">1102</option>
                                            <option value="1101">1103</option>
                                            <option value="1101">1104</option>
                                        </select>
                                        <select name="Jornada" id="Jornada" class="controls">
                                            <option value="Mañana">Mañana</option>
                                            <option value="Tarde">Tarde</option>
                                        </select>
                                        <input type="text" id="Documento" name="Documento_de_identidad" placeholder="Documento de identidad" class="controls" requiered>
                                        <input type="text" id="nota" name="Contrasena" class="controls" placeholder="Digite su contraseña" required>
                                        <input type="text" id="nota" name="Confirmacion" class="controls" placeholder="Confirme su contraseña" required>
                                        <button id="boton" type="submit" name="boton" id="btn" class="btn-neon">REGISTRAR</button>
                                </form>
                                <br><br>
                                </center>

                                <a id="close" class="cosa">Cerrar</a>
                            </div>
                        </div>




                        <button id="open1" class="button"><i class="fa-solid fa-search"></i></button>

                        <div class="modal-container" id="modal_container1">
                            <div class="modal">

                                <form action="" method="POST" id="formReg">
                                    <h1>FORMULARIO DE CONSULTA</h1>
                                    <div class="input-container">

                                        <select name="grupo" class="controls">
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
                                            <option value="1101">1102</option>
                                            <option value="1101">1103</option>
                                            <option value="1101">1104</option>
                                        </select>

                                    </div>

                                    <input type="submit" id="acceder" name="btnAcceder" class="btn-neon" value="CONSULTAR">
                                    <br><br>
                                </form>
                                <a id="close1" class="cosa">Cerrar</a>
                            </div>
                        </div>

                        <a class="button" href="listado_est.php"><i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
            <form method="POST">
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nombre y Apellido</td>
                            <td>Curso</td>
                            <td>Jornada</td>
                            <td>Documento</td>
                            <td>Horas</td>

                        </tr>
                    </thead>
                    <?php
                    if (isset($_POST['btnAcceder']) && $_POST['grupo'] != "") {

                        $grupo = $_POST['grupo'];

                        $sqlMod = " SELECT * FROM usuario WHERE Curso ='$grupo' AND Usuario='Estudiante' ORDER BY Nombre_y_Apellidos";
                        $datosMod = mysqli_query($con, $sqlMod);
                        while ($campoMod = mysqli_fetch_assoc($datosMod)) {


                    ?>
                            <tbody>
                                <tr>

                                    <td><input name="idregistro[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['idregistro'] ?>" class="controlar"></td>
                                    <td><input name="nom[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['Nombre_y_Apellidos'] ?>"></td>
                                    <td><input name="curso[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['Curso'] ?>" class="controlar"></td>
                                    <td><input name="jor[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['Jornada'] ?>" class="controlar"></td>
                                    <td><input name="doc[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['Documento_de_identidad'] ?>" class="controlar"></td>
                                    <td><input name="horas[<?php echo $campoMod['idregistro'] ?>]" value="<?php echo $campoMod['Horas'] ?>" class="controlar"></td>
                                </tr>
                            <?php
                        }
                    } else {
                        $sql2 = " SELECT * FROM usuario WHERE Usuario='Estudiante' ORDER BY Nombre_y_Apellidos";
                        $datos2 = mysqli_query($con, $sql2);
                        while ($campo2 = mysqli_fetch_assoc($datos2)) {


                            ?>
                            <tbody>
                                <tr>

                                    <td><input name="idregistro[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['idregistro'] ?>" class="controlar"></td>
                                    <td><input name="nom[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Nombre_y_Apellidos'] ?>"></td>
                                    <td><input name="curso[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Curso'] ?>" class="controlar"></td>
                                    <td><input name="jor[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Jornada'] ?>" class="controlar"></td>
                                    <td><input name="doc[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Documento_de_identidad'] ?>" class="controlar"></td>
                                    <td><input name="horas[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Horas'] ?>" class="controlar"></td>
                                </tr>

                        <?php
                        }
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

                foreach ($_POST['idregistro'] as $id_cambio) {

                    $editid = mysqli_real_escape_string($con, $_POST['idregistro'][$id_cambio]);
                    $nomEs = mysqli_real_escape_string($con, $_POST['nom'][$id_cambio]);
                    $cursoEs = mysqli_real_escape_string($con, $_POST['curso'][$id_cambio]);
                    $jorEs = mysqli_real_escape_string($con, $_POST['jor'][$id_cambio]);
                    $docEs = mysqli_real_escape_string($con, $_POST['doc'][$id_cambio]);
                    $horasEs = mysqli_real_escape_string($con, $_POST['horas'][$id_cambio]);

                    $actualizar = $con->query("UPDATE usuario SET idregistro='$editid', Nombre_y_Apellidos='$nomEs', Curso='$cursoEs', Jornada='$jorEs', Documento_de_identidad='$docEs', Horas='$horasEs' WHERE idregistro='$id_cambio'");
                }
                if ($actualizar == true) {
                    echo '<script>
                            alert("Se a actualizado correctamente");
                            location.href = "listado_act.php";
                          </script>';
                } else {
                    echo '<script>
                            alert("no se pudo");
                            location.href = "modificarVarios.php";
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