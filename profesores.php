<?php
include "php/conexion.php";
session_start();
if (!isset($_SESSION['nombreU'])) {
    header("location: Estudiantes.php");
}

$nombreUsuario = $_SESSION['nombreU'];

$sqlNombre = " SELECT nombres FROM usuario WHERE nombres='$nombreUsuario'";
$resultadosNombre = $con->query($sqlNombre);
$dato = mysqli_fetch_assoc($resultadosNombre);

$name = implode($dato);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>Profesor</title>
    <link rel="stylesheet" href="css/dashboards12.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">
                            <?php echo $name; ?>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="mostrar5();" id="Cronograma">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Cronograma de actividades</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="mostrar6();">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Estudiantes</span>
                    </a>
                <li>

                <li>
                    <a href="#" onclick="mostrar7();">
                        <span class="icon"><ion-icon name="hammer-outline"></ion-icon></ion-icon></span>
                        <span class="title">Prestamo</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="mostrar8();">
                        <span class="icon"><ion-icon name="hammer-outline"></ion-icon></ion-icon></span>
                        <span class="title">Herramientas</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="mostrar9();">
                        <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                        <span class="title">Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="php/cerrar.php">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Cerrar</span>
                    </a>
                </li>
    </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
        </div>


<div class="cronograma" id="cronograma">
                    <center>
                        <h4>Cronograma de actividades</h4>
                        <div class="recentCustomers">
                            <div><a id="boton" onclick="mostrar1();" class="boton1" href="#zona1">Zona 1</a></div>
                            <div><a id="boton" onclick="mostrar2();" class="boton1" href="#zona2">Zona 2</a></div>
                            <div><a id="boton" onclick="mostrar3();" class="boton2" href="#zona3">Zona 3</a></div>
                            <div><a id="boton" onclick="mostrar4();" class="boton2" href="#zona4">Zona 4</a></div>

                        </div> <br><br>

                        <!--lo q desaparese y vuelve-->

                        <div class="zona" id="zona1">
                            <h4>Zona 1</h4>
                            <table class="no1">
                                <thead>
                                    <tr class="trr">
                                        <td class="tdt">Fecha_inicio</td>
                                        <td class="tdt">Fecha_fin</td>
                                        <td class="tdt">Actividades</td>
                                        <td class="tdt">Aprende</td>
                                    </tr>
                                </thead>
                                <?php
                                $sql6 = "SELECT * FROM cronograma_actividades where id_zona='1'  ";
                                $datos = mysqli_query($con, $sql6);

                                while ($campo = mysqli_fetch_assoc($datos)) {

                                ?>
                                    <tbody>
                                        <form action="">
                                            <tr class="trr">
                                                <td class="tdt"><?php echo $campo['fecha_inicio']; ?></td>
                                                <td class="tdt"><?php echo $campo['fecha_fin']; ?></td>
                                                <td class="tdt"><?php echo $campo['id_labor_social']; ?></td>
                                                <td class="tdt"><button>icono no funcional</button></td>
                                            </tr>
                                        </form>
                        </div>
                </div>

            <?php
                                }
            ?>
            </tbody>
            </table>
            <button id="botton" onclick="ocultar1();" class="Cerrar">Cerrar</button>
            </div>

            <div class="zona" id="zona2">
                <h4>Zona 2</h4>
                <table class="no1">
                    <thead>
                        <tr class="trr">
                            <td class="tdt">Fecha_inicio</td>
                            <td class="tdt">Fecha_fin</td>
                            <td class="tdt">Actividades</td>
                            <td class="tdt">Aprende</td>
                        </tr>
                    </thead>
                    <?php
                    $sql5 = "SELECT * FROM cronograma_actividades where id_zona='2'";
                    $datos = mysqli_query($con, $sql5);

                    while ($campo = mysqli_fetch_assoc($datos)) {

                    ?>
                        <tbody>
                            <form action="">
                                <tr class="trr">
                                    <td class="tdt"><?php echo $campo['fecha_inicio']; ?></td>
                                    <td class="tdt"><?php echo $campo['fecha_fin']; ?></td>
                                    <td class="tdt"><?php echo $campo['id_labor_social']; ?></td>
                                    <td class="tdt"><button>icono no funcional</button></td>
                                </tr>
                            </form>
            </div>
        </div>

    <?php
                    }
    ?>
    </tbody>
    </table>
    <button id="botton" onclick="ocultar2();" class="Cerrar">Cerrar</button>
    </div>
    <div class="zona" id="zona3">
        <h4>Zona 3</h4>
        <table class="no1">
            <thead>
                <tr class="trr">
                    <td class="tdt">Fecha_inicio</td>
                    <td class="tdt">Fecha_fin</td>
                    <td class="tdt">Actividades</td>
                    <td class="tdt">Aprende</td>
                </tr>
            </thead>
            <?php
            $sql7 = "SELECT * FROM cronograma_actividades where id_zona='3'";
            $datos = mysqli_query($con, $sql7);

            while ($campo = mysqli_fetch_assoc($datos)) {

            ?>
                <tbody>
                    <form action="">
                        <tr class="trr">
                            <td class="tdt"><?php echo $campo['fecha_inicio']; ?></td>
                            <td class="tdt"><?php echo $campo['fecha_fin']; ?></td>
                            <td class="tdt"><?php echo $campo['id_labor_social']; ?></td>
                            <td class="tdt"><button>icono no funcional</button></td>
                        </tr>
                    </form>
    </div>
    </div>

    <?php
            }
    ?>
    </tbody>
    </table>
    <button id="botton" onclick="ocultar3();" class="Cerrar">Cerrar</button>
    </div>
    <div class="zona" id="zona4">
        <h4>Zona 4</h4>
        <table class="no1">
            <thead>
                <tr class="trr">
                    <td class="tdt">Fecha_inicio</td>
                    <td class="tdt">Fecha_fin</td>
                    <td class="tdt">Actividades</td>
                    <td class="tdt">Aprende</td>
                </tr>
            </thead>
            <?php
            $sql8 = "SELECT * FROM cronograma_actividades where id_zona='4'";
            $datos = mysqli_query($con, $sql8);

            while ($campo = mysqli_fetch_assoc($datos)) {

            ?>
                <tbody>
                    <form action="">
                        <tr class="trr">
                            <td class="tdt"><?php echo $campo['fecha_inicio']; ?></td>
                            <td class="tdt"><?php echo $campo['fecha_fin']; ?></td>
                            <td class="tdt"><?php echo $campo['id_labor_social']; ?></td>
                            <td class="tdt"><button>icono no funcional</button></td>
                        </tr>
                    </form>
    </div>
    </div>

    <?php
            }
    ?>
    </tbody>
    </table>
    <button id="botton" onclick="ocultar4();" class="Cerrar">Cerrar</button>
    </div>

    </center>


</div>

<div class="estudiantes" id="estudiantes">
    <div class="details1">
        <div class="recentOrders">


            <div class="listado_est" id="listado_est">
                <div class="cardHeader">
                    <h2>Lista Estudiantes</h2>
                    <div class="list">

                            <div class="navigation5">
                                <a class="button" href="#" onclick="mostrar10();"><i class="fa-solid fa-brush"></i></a>

                                <!-- <a class="button" id="open" href="nuevo.php"><i class="fa-solid fa-add"></i></a> -->

                                <button id="open1" class="button"><i class="fa-solid fa-search"></i></button>

                                <div class="modal-container1" id="modal_container1">
                                    <div class="modal">

                                        <form method="POST" id="formReg" class="form-register">
                                            <h1>Consultar curso</h1><br>

                                                <select name="curso" class="controls">
                                                    <option value="1">901</option>
                                                    <option value="2">902</option>
                                                    <option value="3">903</option>
                                                    <option value="4">904</option>

                                                    <option value="5">1001</option>
                                                    <option value="6">1002</option>
                                                    <option value="7">1003</option>
                                                    <option value="8">1004</option>

                                                    <option value="9">1101</option>
                                                    <option value="10">1102</option>
                                                    <option value="11">1103</option>
                                                    <option value="12">1104</option>
                                                </select><br><br>

                                            <input type="submit" id="acceder" name="btnConsultar" class="btn-neon" value="CONSULTAR" onclick="mostrar12();">
                                            <br><br>

                                        </form>
                                        <script>
                                            $("#acceder").click(function() {
                                                $.ajax({
                                                    url: "profesores.php",
                                                    type: "post",
                                                    data: $("formReg").serialize()
                                                });
                                            });
                                        </script>
                                        <a id="close1" class="cosa">Cerrar</a>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>X</td>
                            <td>Nombre y Apellido</td>
                            <td>Documento</td>
                            <td>Curso</td>
                            <td>Jornada</td>

                            <td>CRUD</td>
                        </tr>
                    </thead>

                    <?php
                        if (isset($_POST['btnConsultar']) && $_POST['curso'] != "") {

                            $grupo = $_POST['curso'];

                            $sqlCon = " 
                            SELECT * FROM usuario WHERE id_rol='2' ORDER BY nombres;";

                            $datosCon = mysqli_query($con, $sqlCon);
                            while ($campoCon = mysqli_fetch_assoc($datosCon)) {


                        ?>
                                <div id="resultado">
                                    <tbody>
                                    <tr>
                                        <td><?php echo $campoCon['id_usuario'] ?></td>
                                        <td><?php echo $campoCon['nombres'] ?></td>
                                        <td><?php echo $campoCon['documento'] ?></td>
                                        <td><?php echo $campoCon['id_curso'] ?></td>
                                        <td><?php echo $campoCon['jornada'] ?></td>


                                        <!-- <td>
                                            <a class="si" href="php/modificar_est.php?id=<?php echo $campoCon['documento'] ?>">Actualizar</a>
                                        </td> -->
                                        <td>
                                            <a class="si" href="php/eliminar_est.php?id=<?php echo $campoCon['documento'] ?>">Borrar</a>
                                        </td>


                                    </tr>
                                </div>
                            <?php
                            }
                        } else {
                            $sql2 = 
                            " 
                            SELECT * FROM usuario WHERE id_rol='2' ORDER BY nombres;"
                            ;
                            $datos2 = mysqli_query($con, $sql2);
                            while ($campo = mysqli_fetch_assoc($datos2)) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $campo['id_usuario'] ?></td>
                                        <td><?php echo $campo['nombres'] ?></td>
                                        <td><?php echo $campo['documento'] ?></td>
                                        <td><?php echo $campo['id_curso'] ?></td>
                                        <td><?php echo $campo['jornada'] ?></td>


                                        <!-- <td>
                                            <a class="si" href="php/modificar_est.php?id=<?php echo $campo['documento'] ?>">Actualizar</a>
                                        </td> -->
                                        <td>
                                            <a class="si" href="php/eliminar_est.php?id=<?php echo $campo['documento'] ?>">Borrar</a>
                                        </td>


                                    </tr>
                                            <?php
                                            }
                                        }

                                            ?>
                                </tbody>
                </table>

            </div>


            <div class="listado_act" id="listado_act">
                <div class="cardHeader">
                    <center>
                        <h2>Control asistencia</h2>
                    </center>
                    <div class="list">
                         <form action="php/borrarVarios.php" method="POST">
                        <div class="navigation2">


                            <a class="button" href="#" onclick="mostrar11();"><i class="fa-solid fa-arrow-left"></i></a>

                            <a id="open8" class="button"><i class="fa-solid fa-date"></i></a>

                            <button type="submit" class="button" name="btnDel"><i class="fa-solid fa-check"></i></button>

                            <div class="modal-container1" id="modal_container8">
                                <div class="modal">

                                    <div class="form-register">
                                        <h1>Fecha asistencia </h1><br>

                                            <input type="date" name="fecha" class="controls"><br><br>

                                            <a id="close8" class="cosa">continuar</a>
                                        <br><br>

                                    </div>
                                </div>
                            </div>



                                </div>
                            </div>
                        </div>

                            <table>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nombre y Apellido</td>
                                        <td>Curso</td>
                                        <td>Jornada</td>
                                        <td>Documento</td>

                                    </tr>
                                </thead>
                                <?php
                                    $sql2 = " 
                                    SELECT * FROM usuario WHERE id_rol='2' ORDER BY nombres;";

                                    $datos2 = mysqli_query($con, $sql2);
                                    while ($campo2 = mysqli_fetch_assoc($datos2)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="seleccion[]" value="<?php echo $campo2['id_usuario'] ?>"></td>
                                        <input type="hidden" name="horas" value="6">
                    </form>
                <form method="POST" style="display: none;">
                                    <input type="hidden" name="idregistro" value="<?php echo $campo2['id_usuario'] ?>">
                                        <td><?php echo $campo2['nombres'] ?></td>
                                        <td><?php echo $campo2['id_curso'] ?></td>
                                        <td><?php echo $campo2['jornada'] ?></td>
                                        <td><?php echo $campo2['documento'] ?></td>
                                    </tr>
                            <?php
                            }
                            ?>

                                </tbody>
                    </table>
                </form>
                <!-- <?php

                    if (isset($_POST['btnCam'])) {

                        foreach ($_POST['idregistro'] as $id_cambio) {

                            $editid = mysqli_real_escape_string($con, $_POST['idregistro'][$id_cambio]);
                            $horasEs = mysqli_real_escape_string($con, $_POST['horas'][$id_cambio]);

                            $actualizar = $con->query("UPDATE usuario SET idregistro='$editid', Nombre_y_Apellidos='$nomEs', curso='$cursoEs', jornada='$jorEs', Documento_de_identidad='$docEs', Horas='$horasEs' WHERE idregistro='$id_cambio'");
                        }
                        if ($actualizar == true) {
                            echo '<script>
                                    alert("Se actualizo correctamente");
                                    window.history.go(-1);
                                </script>';
                        } else {
                            echo '<script>
                                    alert("no se pudo");
                                    window.history.go(-1);
                                </script>';
                        }
                    }
                ?> -->
            </div>
        </div>
    </div>
</div>

<div class="prestamo" id="prestamo">
    <div class="details2">
        <div class="recentOrders1">
            <div class="cardHeader">
                <h2>Gestion de prestamo herramientas</h2>
                <div class="list">

                    <div class="navigation4">



                        <a class="button" id="open4" href="#"><i class="fa-solid fa-add"></i></a>

                        <div class="modal-container4" id="modal_container4">
                            <div class="modal">
                                <form action="php/regPrestamo.php" method="POST" name="formDatos" id="formReg" class="form-register">

                                    <center>
                                        <h5>Formulario de prestamo</h5>

                                        <input text="text" id="codigo" name="doc" class="controls2" placeholder="Documento"required><br>
                                        <input type="text" id="nota" name="idHerramienta" class="controls2" placeholder="Codigo herramienta" pattern="(?!0)[1-9][0-9]{0,2}" required><br>
                                        <input type="datetime-local" class="controls2" id="fecha" name="fechaPres" required><br><br>
                                        <button id="boton1" type="submit" name="boton1" id="btn" class="btn-neon">REGISTRAR</button>
                                </form>
                                <br><br>
                                </center>

                                <a id="close4" class="cosa">Cerrar</a>
                            </div>
                        </div>
                        <form action="php/devolver_varios.php" method="POST">
                            <button type="submit" class="button1" name="btnDel4"><i class="fa-solid fa-check"></i></button>
                                    </div>

                                </div>
                            </div>

                            <table class="no">
                                <thead>
                                    <tr>
                                        <td>X</td>
                                        <td>Nombre</td>
                                        <td>Estudiantes</td>
                                        <td>Estado</td>
                                        <td>Tiempo</td>
                                        <td>Gestion</td>
                                        <td>Gestion</td>

                                    </tr>
                                </thead>
                                <?php
                                $sql2 = " 
                                SELECT id_his_her, Inventario_herramientas.nombre, usuario.nombres, historico_herramientas.fecha_entrega,fecha_devolucion, historico_herramientas.estado
                                FROM historico_herramientas
                                INNER JOIN usuario
                                ON usuario.id_usuario=historico_herramientas.id_usuario
                                INNER JOIN inventario_herramientas
                                ON inventario_herramientas.id_inv_her = historico_herramientas.id_inv_her;
                                                    ";
                                $datos2 = mysqli_query($con, $sql2);
                                while ($campo2 = mysqli_fetch_assoc($datos2)) {


                                ?>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="selecion[]" value="<?php echo $campo2['id_his_her'] ?>"></td>
                                            <td><?php echo $campo2['nombre'] ?></td>
                                            <td><?php echo $campo2['nombres'] ?></td>
                                            <td><?php echo $campo2['estado'] ?></td>
                                            <td><?php echo $campo2['fecha_entrega'] ?></td>
                                            <td><a class="si" href="php/devolver.php?id=<?php echo $campo2['id_his_her'] ?>">Devolver</a></td>
                                            <td><a class="si" href="php/prestar.php?id=<?php echo $campo2['id_his_her'] ?>">Prestar</a></td>
                                        </tr>
                                    <?php
                                }
                                    ?>
                        </form>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<div class="herramientas" id="herramientas">
    <div class="details2">
        <div class="recentOrders1">
            <div class="cardHeader">
                <h2>Gestion de herramientas bodega</h2>
                <h6></h6>
                <div class="list">
                    <div class="navigation3">
                        <a class="button" id="open3" href="#"><i class="fa-solid fa-add"></i></a>


                        <div class="modal-container3" id="modal_container3">
                            <div class="modal">

                                <form action="php/regHer.php" method="POST" name="formDatosPersonales" id="formReg1" class="form-register">

                                    <h5>Gestion Herramientas</h5>

                                    <div class="form_Nombre" id="form_Nombre">
                                        <input type="text" name="nombre_herramienta" placeholder="nombre de la Herramienta" class="controls" id="Nombre" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){3})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{3,15}" required>
                                    </div><br>

                                    <div class="form_estado" id="form_estado">
                                        <select name="estado" id="estado" class="controls">
                                            <option value="1">Bueno</option>
                                            <option value="2">Regular</option>
                                            <option value="3">Malo</option>
                                        </select>
                                        <input type="hidden" value="No" name="total">
                                    </div><br>
                                    <div class="form_disponibilidad" id="form_disponibilidad">
                                    <select name="disponibilidad" id="disponibilidad" class="controls">
                                            <option value="disponible">Disponible</option>
                                            <option value="no disponible">No disponible</option>
                                        </select>
                                    </div><br>
                                    <input type="submit" name="boton" class="btn-neon" value="Registrar">
                                    <br><br>
                                </form>
                                <a id="close3" class="cosa">Cerrar</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="images">
                    <table class="no">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nombre</td>
                                <td>Estado</td>
                                <td>disponibilidad</td>
                                <!-- <td>Gestion</td> -->
                                <td>Gestion</td>
                            </tr>
                        </thead>
<!-- 
                        <?php
                        if (isset($_POST['btnAcceder'])) {

                            $sqlMod = " SELECT * FROM inventario_herramientas WHERE  ='' AND Total='no' ORDER BY nombres";
                            $datosMod = mysqli_query($con, $sqlMod);
                            while ($campoMod = mysqli_fetch_assoc($datosMod)) {


                        ?>
                                <div id="resultado">
                                    <tbody>
                                        <tr>

                                            <td><input name="idregistro[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['id_usuario'] ?>" class="controlar"></td>
                                            <td><input name="nom[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['nombres'] ?>"></td>
                                            <td><input name="ape[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['apellidos'] ?>"></td>
                                            <td><input name="doc[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['documento'] ?>" class="controlar"></td>
                                            <td><input name="jor[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['jornada'] ?>" class="controlar"></td>
                                            <td><input name="curso[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['id_curso'] ?>" class="controlar"></td>
                                            <td><input name="horas[<?php echo $campoMod['id_usuario'] ?>]" value="<?php echo $campoMod['Horas'] ?>" class="controlar"></td>
                                        </tr>
                                </div>
                            <?php
                            }
                        } else {
                            $sql2 = " SELECT * FROM usuario WHERE id_rol='1' ORDER BY nombres";
                            $datos2 = mysqli_query($con, $sql2);
                            while ($campo2 = mysqli_fetch_assoc($datos2)) {


                            ?>
                                <tbody>
                                    <tr>

                                        <td><input name="idregistro[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['idregistro'] ?>" class="controlar"></td>
                                        <td><input name="nom[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Nombre_y_Apellidos'] ?>"></td>
                                        <td><input name="curso[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['curso'] ?>" class="controlar"></td>
                                        <td><input name="jor[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['jornada'] ?>" class="controlar"></td>
                                        <td><input name="doc[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Documento_de_identidad'] ?>" class="controlar"></td>
                                        <td><input name="horas[<?php echo $campo2['idregistro'] ?>]" value="<?php echo $campo2['Horas'] ?>" class="controlar"></td>
                                    </tr>

                            <?php
                            }
                        }

                            ?>


 -->











                        <?php

                        $sql1 = " SELECT * FROM inventario_herramientas ORDER BY id_est_her";
                        $datos1 = mysqli_query($con, $sql1);
                        while ($campo = mysqli_fetch_assoc($datos1)) {


                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $campo['id_inv_her'] ?></td>
                                    <td><?php echo $campo['nombre'] ?></td>
                                    <td><?php echo $campo['id_est_her'] ?></td>
                                    <td><?php echo $campo['disponibilidad'] ?></td>
                                    <!-- <td><a class="si" style="background-color: green;" href="php/modificarHerra.php?id=<?php echo $campo['id_inv_her'] ?>">Actualizar</a></td> -->
                                    <td><a class="si" style="background-color: red;" href="php/eliminarHerra.php?id=<?php echo $campo['id_inv_her'] ?>">Borrar</a></td>
                                </tr>
                            <?php
                        }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="actividades" id="actividades">
    <div class="details3">
        <div class="recentOrders">
            <div class="cardHeader">
                <center>
                    <h2>Actividades</h2>
                </center>
                <div class="list">
                    <div class="navigation1">
                        <button class="button" id="open5"><i class="fa-solid fa-add"></i></button>

                        <div class="modal-container" id="modal_container5">
                            <div class="modal">
                                <form action="php/regCro.php" method="POST" name="formDatosPersonales" id="formReg" class="form-register">

                                    <center>
                                        <h5>Formulario de actividades</h5>

                                        <div class="form_grupo" id="form_Nombre">
                                            <label class="fechaini">fehca inicio</label>
                                            <input type="date" name="fecha_inicio" class="controls" id="fecha_inicio" required><br>
                                            <label class="fechafi">fehca fin</label>
                                            <input type="date" name="fecha_fin" class="controls" id="fecha_fin" required><br>
                                            <!-- <input type="text" name="id_labor_social" class="controls" placeholder="Actividad" id="actividad" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){5})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{5,15}" required><br> -->
                                            <select name="id_labor_social" id="id_labor_social" class="controls">
                                                <option value="2">siembra de papa</option>
                                                <option value="3">siembra de fresa</option>
                                                <option value="4">Siembra de plantas medicinales 1</option>
                                                <option value="5">siembra de curuba 1</option>
                                                <option value="6">siembra de yuca</option>
                                                <option value="7">siembra de pepino</option>
                                                <option value="8">siembra de cebolla</option>
                                                <option value="9">siembra de lulo</option>
                                                <option value="10">siembra de curuba 2</option>
                                                <option value="11">siembra de plantas medicinales 2</option>
                                            </select>
                                            <select name="id_zona" id="id_zona" class="controls">
                                                <option value="1">Zona 1</option>
                                                <option value="2">Zona 2</option>
                                                <option value="3">Zona 3</option>
                                                <option value="4">Zona 4</option>
                                            </select>
                                        </div>

                                        <input type="submit" name="boton3" class="btn-neon" value="Registrate">

                                </form>
                                </center>
                                <a id="close5" class="cosa">Cerrar</a>
                            </div>
                        </div>



                        <button class="button1" id="open6"><i class="fa-solid fa-search"></i></button>
                        
                        <div class="modal-container" id="modal_container6">
                            <div class="modal">
                            <form method="POST" id="formReg" class="form-register">
                                            <h1>Consultar fechas prontas a terminar</h1><br>
                                                <input type="date" class="controls" name="fechaf">
                                                <br><br>
                                            <input type="submit" id="acceder" name="btnConsultarfechaf" class="btn-neon" value="CONSULTAR" onclick="mostrar12();">
                                            <br><br>

                            </form>
                                </center>
                                <a id="close6" class="cosa">Cerrar</a>
                            </div>
                        </div>
                        
                        
                        
                        
                        <form action="php/borrar_acti.php" method="POST">
                                                <button type="submit" class="button1" name="btnDel3"><i class="fa-solid fa-trash"></i></button>
                                                
                                        </div>
                                    </div>
                                </div>

                                <table>
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>zona</td>
                                            <td>Fecha_inicio</td>
                                            <td>fecha_fin</td>
                                            <td>actividad</td>
                                            
                                            <td>CRUD</td>
                                        </tr>

                                    </thead>

                                    <?php
                        if (isset($_POST['btnConsultarfechaf']) && $_POST['fechaf'] != "") {

                            $fechaf = $_POST['fechaf'];

                            $sqlCon = "SELECT id_cro_act, fecha_inicio, fecha_fin, id_zona, labor_social.nombre FROM cronograma_actividades INNER JOIN labor_social ON labor_social.id_labor_social = cronograma_actividades.id_labor_social WHERE fecha_fin = '$fechaf' ORDER BY id_zona ";
                            $datosCon = mysqli_query($con, $sqlCon);
                            while ($campoCon = mysqli_fetch_assoc($datosCon)) {


                        ?>
                                <div id="resultado">
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="selecion[]" value="<?php echo $campoCon['id_cro_act']?>"></td>
                                        <td><?php echo $campoCon['id_zona'] ?></td>
                                        <td><?php echo $campoCon['fecha_inicio'] ?></td>
                                        <td><?php echo $campoCon['fecha_fin'] ?></td>
                                        <td><?php echo $campoCon['nombre'] ?></td>

                                        <td>
                                            <a class="si" href="php/Actualizar_acti.php?id=<?php echo $campoCon['id_cro_act']?>">Actualizar</a>
                                        </td>
                                        


                                    </tr>
                                </div>
                            <?php
                            }
                        } else {
                            $sql2 = "SELECT id_cro_act, fecha_inicio, fecha_fin, id_zona, labor_social.nombre FROM cronograma_actividades INNER JOIN labor_social ON labor_social.id_labor_social = cronograma_actividades.id_labor_social ORDER BY id_zona ";
                            $datos2 = mysqli_query($con, $sql2);
                            while ($campo = mysqli_fetch_assoc($datos2)) {
                            ?>
                                <tbody>
                                    <tr>
                                    <td><input type="checkbox" name="selecion[]" value="<?php echo $campo['id_cro_act']?>"></td>
                                        <td><?php echo $campo['id_zona'] ?></td>
                                        <td><?php echo $campo['fecha_inicio'] ?></td>
                                        <td><?php echo $campo['fecha_fin'] ?></td>
                                        <td><?php echo $campo['nombre'] ?></td>

                                        <td>
                                            <a class="si" href="php/Actualizar_acti.php?id=<?php echo $campo['id_cro_act']?>">Actualizar</a>
                                        </td>
                                        


                                    </tr>
                                            <?php
                                            }
                                        }

                                            ?>
                                </tbody>
                            </table>
                        </form>
        </div>
    </div>
</div>





<script src="js/si.js"></script>
<script src="js/modal1.js"></script>
<script src="js/nave.js"></script>
<script src="js/Estudiant.js"></script>
<script src="js/Estudiantes2.js"></script>
<script src="js/noreg.js"></script>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>