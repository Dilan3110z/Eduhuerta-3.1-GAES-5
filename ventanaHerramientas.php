<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/total12.css">
    <link rel="stylesheet" href="css/style_Herramienta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<?php
include('php/conexion.php');
session_start();
?> 

<body>
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <a href="profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h2>Gestion de herramientas bodega</h2>
                <div class="list">
                </div>
                <div class="navigation">
                <a href="total.php" class="button"><i class="fa-solid fa-arrow-left"></i></a>
                    <button id="open" onclick="mostrar1();" class="button"><i class="fa-solid fa-add"></i></button>
                    <div class="modal-container" id="modal_container">
                            <div class="modal">

                                <form action="php/reg_herra_total.php" method="POST" name="formDatosPersonales" id="formReg" class="form_register" enctype="multipart/form-data">

                                    <h5>Gestion Herramientas</h5>
                                        <input type="text" name="nombre_herramienta" placeholder="nombre de la Herramienta" class="controls" id="Nombre"required>

                                        <input type="hidden" value="Si" name="total">
                                        <input type="file" name="imagen"required>
                                        <br><br>
                                    <input type="submit" name="boton" class="btn-neon" value="Registrar">
                                    <br><br>
                                </form>
                                <a id="close" class="cosa" onclick="ocultar1();">Cerrar</a>
                            </div>
                        </div>


                </div>
            </div>
            <div class="container" id="container">
            <center>
                <div class="search-box">
                    <form action="" method="POST">
                        <input type="text" name="nombre" placeholder="Buscar">
                        <input type="submit" name="btn" style="display:none;">
                    </form>
                </div>
            </center>
                <div class="images" id="images">
                    <?php
                    if (isset($_POST['btn']) && $_POST['nombre'] != "") {

                        $nombre = $_POST['nombre'];

                        $sql1 = " SELECT * FROM herramienta WHERE nombre_herramienta = '$nombre' AND total='Si' ";
                        $datos1 = mysqli_query($con, $sql1);
                        while ($campo = mysqli_fetch_assoc($datos1)) {


                    ?>
                            <div class="images2">
                                <center>
                                    <div class="des" id="des"> 
                                        <a href="herramientas.php?id=<?php echo $campo['nombre_herramienta'] ?>">
                                            <div class="image-box" data-name="si">
                                                <img src="data:image/jpeg;base64,<?php echo base64_encode($campo['img'])?>">
                                                <h6><?php echo $campo['nombre_herramienta'] ?></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <center>
                            </div>

                        <?php
                        }
                    } else {
                        $sql2 = " SELECT * FROM herramienta WHERE total='Si'";
                        $datos2 = mysqli_query($con, $sql2);
                        while ($campo2 = mysqli_fetch_assoc($datos2)) {

                        ?>
                                    <div class="des" id="des"> 
                                        <a href="herramientas.php?id=<?php echo $campo2['nombre_herramienta'] ?>">
                                            <div class="image-box" data-name="si">
                                                <img src="data:image/jpg;base64,<?php echo base64_encode($campo2['img']) ?>">
                                                <h6><?php echo $campo2['nombre_herramienta'] ?></h6>
                                            </div>
                                        </a>
                                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/aparec.js"></script>
    <script>
        let navigation = document.querySelector('.navigation');
        navigation.onclick = function() {
            navigation.classList.toggle('active');
        }
    </script>
    <script src="js/apps.js"></script>
</body>

</html>