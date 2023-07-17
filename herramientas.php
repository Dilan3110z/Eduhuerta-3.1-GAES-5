<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_Herramienta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inventario</title>
</head>
<?php
include('php/conexion.php');

?>

<body>
    <div class="details">
        <div class="recentOrders1">
            <div class="cardHeader">
                <a href="ventanaHerramientas.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h2>Gestion de herramientas bodega</h2>
                <h6></h6>
                <div class="list">
                    <div class="navigation">
                        <a href="total.php" class="button"><i class="fa-solid fa-arrow-left"></i></a>
                        <button id="open3" class="button"><i class="fa-solid fa-add"></i></button>

                        <div class="modal-container3" id="modal_container3">
                            <div class="modal">

                                <form action="php/regHer.php" method="POST" name="formDatosPersonales" id="formReg" class="form_register">

                                    <h5>Gestion Herramientas</h5>

                                    <div class="form_Nombre" id="form_Nombre">
                                        <input type="text" name="nombre_herramienta" placeholder="nombre de la Herramienta" class="controls" id="Nombre">
                                    </div>

                                    <div class="form_estado" id="form_estado">
                                        <select name="estado" id="estado" class="controls">
                                            <option value="Bueno">Bueno</option>
                                            <option value="Malo">Malo</option>
                                            <option value="Medio">Medio</option>
                                        </select>
                                        <input type="hidden" value="No" name="total">
                                    </div>
                                    <input type="submit" name="boton" class="btn-neon" value="Registrar">
                                    <br><br>
                                </form>
                                <a id="close3" class="cosa">Cerrar</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="container">
                <div class="images">
                    <table class="no">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nombre</td>
                                <td>Estudiantes</td>
                                <td>Estado</td>
                                <td>Gestion</td>
                                <td>Gestion</td>
                            </tr>
                        </thead>
                        <?php

                        $sql1 = " SELECT * FROM herramienta WHERE total='No' ORDER BY nombre_herramienta";
                        $datos1 = mysqli_query($con, $sql1);
                        while ($campo = mysqli_fetch_assoc($datos1)) {


                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $campo['idHerramienta'] ?></td>
                                    <td><?php echo $campo['nombre_herramienta'] ?></td>
                                    <td><?php echo $campo['encargado'] ?></td>
                                    <td><?php echo $campo['estado'] ?></td>
                                    <td><a class="si" style="background-color: green;" href="php/modificarHerra.php?id=<?php echo $campo['idHerramienta'] ?>">Actualizar</a></td>
                                    <td><a class="si" style="background-color: red;" href="php/eliminarHerra.php?id=<?php echo $campo['idHerramienta'] ?>">Borrar</a></td>
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



    <script>
        let navigation = document.querySelector('.navigation');
        navigation.onclick = function() {
            navigation.classList.toggle('active');
        }
    </script>
    <script src="js/apps.js"></script>
</body>

</html>