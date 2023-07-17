<?php
include "php/conexion.php";
session_start();
if (!isset($_SESSION['nombreU'])) {
    header("location: Estudiantes.php");
}

$nombreUsuario = $_SESSION['nombreU'];

$sqlNombre = " SELECT Nombre_y_Apellidos FROM usuario WHERE Nombre_y_Apellidos='$nombreUsuario'";
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
    <link rel="stylesheet" href="css/style_estudi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="css/Estudiante1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="navigation1">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title"><?php echo $name; ?></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Cronograma de actividades</span>
                    </a>
                </li>
                <li>
                    <a href="listado_est.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Estudiantes</span>
                    </a>
                <li>
                    <a href="ventanaHerramientas.php">
                        <span class="icon"><ion-icon name="hammer-outline"></ion-icon></ion-icon></span>
                        <span class="title">Herramientas</span>
                    </a>
                </li>
                <li>
                    <a href="ventanaprestamo.php">
                        <span class="icon"><ion-icon name="hammer-outline"></ion-icon></ion-icon></span>
                        <span class="title">Prestamo</span>
                    </a>
                </li>
                <li>
                    <a href="actividades.php">
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







            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <div class="toggle">
                        </div>
                        <h2>Lista Estudiantes</h2>
                        <div class="list">
                            <div class="user">
                            </div>
                            <form action="php/borrarVarios.php" method="POST">
                                <div class="navigation">
                                    <a class="button" href="listado_act.php"><i class="fa-solid fa-brush"></i></a>
                                    <button type="submit" class="button" name="btnDel"><i class="fa-solid fa-trash"></i></button>
                                    <a class="button" id="open" href="nuevo.php"><i class="fa-solid fa-add"></i></a>

                                </div>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Selecion</td>
                                <td>Nombre y Apellido</td>
                                <td>Curso</td>
                                <td>Jornada</td>
                                <td>Documento</td>
                                <td>Horas</td>

                                <td>CRUD</td>
                                <td>CRUD</td>
                            </tr>
                        </thead>
                        <?php

                        $sql = " SELECT * FROM usuario WHERE Usuario='Estudiante' ORDER BY Nombre_y_Apellidos";
                        $datos = mysqli_query($con, $sql);

                        $sql3 = "SELECT Usuario FROM usuario";

                        $consulta3 = $con->query($sql3);
                        $data3 = mysqli_fetch_assoc($consulta3);
                        $Usuario = implode($data3);


                        while ($campo = mysqli_fetch_assoc($datos)) {

                        ?>
                            <form method="POST" action="php/modificar_est.php">
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="seleccion[]" value="<?php echo $campo['idregistro'] ?>"></td>
                                        <td><?php echo $campo['Nombre_y_Apellidos'] ?></td>
                                        <td><?php echo $campo['Curso'] ?></td>
                                        <td><?php echo $campo['Jornada'] ?></td>
                                        <td><?php echo $campo['Documento_de_identidad'] ?></td>
                                        <td><?php echo $campo['Horas'] ?></td>

                                        <td>
                                            <a class="si" href="php/modificar_est.php?id=<?php echo $campo['Documento_de_identidad'] ?>">ACTUALIZAR</a>
                                        </td>
                                        <td>
                                            <a class="si" href="php/eliminar_est.php?id=<?php echo $campo['Documento_de_identidad'] ?>">ELIMINAR</a>
                                        </td>


                                    </tr>
                                <?php
                            }
                                ?>
                                </tbody>
                    </table>
                    </form>
                </div>
            </div>











            <script>
                let navigation = document.querySelector('.navigation');
                navigation.onclick = function() {
                    navigation.classList.toggle('active');
                }
            </script>
            <script src="js/app.js"></script>











            <script src="js/Estudian.js"></script>
            <script src="js/si.js"></script>


            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>