<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_Herramientas3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Prestamo</title>
</head>
<?php
include('php/conexion.php');
?>

<body>





    <div class="details2">
        <div class="recentOrders1">
            <div class="cardHeader">
                <h2>Gestion de prestamo herramientas</h2>
                <div class="list">
                    <div class="user">
                    </div>
                    <form action="php/act_Varios.php" method="POST">
                        <div class="navigation3">

                            <a href="profesores.php" class="button"><i class="fa-solid fa-arrow-left"></i></a>
                            <button type="submit" class="button" name="btnDel"><i class="fa-solid fa-check"></i></button>

                        </div>
                </div>
            </div>

            <table class="no">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nombre</td>
                        <td>Estudiantes</td>
                        <td>Estado</td>
                        <td>Tiempo</td>
                        <td>Gestion</td>
                        <td>Gestion</td>

                    </tr>
                </thead>
                <?php
                $sql3= "SELECT usuario_idregistro FROM prestamo_has_usuario";
                
                $consulta3= $con->query($sql3);
				$data3=mysqli_fetch_assoc($consulta3);
				$Usuario= implode($data3);

                $sql4="SELECT Nombre_y_Apellidos FROM usuario WHERE idregistro='$Usuario'";

                $consulta4= $con->query($sql4);
				$data4=mysqli_fetch_assoc($consulta4);
				$nombreUsr= implode($data4);

                $sql5="SELECT fecha FROM prestamo";

                $sql2 = "SELECT idHerramienta, nombre_herramienta, estado FROM herramienta WHERE Total='no'";
                $datos2 = mysqli_query($con, $sql2);
                while ($campo2 = mysqli_fetch_assoc($datos2)) {


                ?>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="seleccion[]" value="<?php echo $campo2['idHerramienta'] ?>"></td>
                            <td><?php echo $campo2['nombre_herramienta'] ?></td>
                            <td><?php echo $campo2['encargado'] ?></td>
                            <td><?php echo $campo2['estado'] ?></td>
                            <td><?php echo $campo2['fecha_prestamo'] ?></td>
                            <td><a class="si" href="php/devolver.php?id=<?php echo $campo2['idHerramienta'] ?>">Devolver</a></td>
                            <td><a class="si" href="php/prestar.php?id=<?php echo $campo2['idHerramienta'] ?>">Prestar</a></td>
                        </tr>
                    <?php
                }
                    ?>

                    </tbody>
            </table>
        </div>
    </div>




    <script>
        let navigation = document.querySelector('.navigation');
        navigation.onclick = function() {
            navigation.classList.toggle('active');
        }
    </script>
    <script src="js/app.js"></script>
</body>

</html>