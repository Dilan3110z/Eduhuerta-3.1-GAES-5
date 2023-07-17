<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/aprendes.css">-->
    <link rel="stylesheet" href="css/total12.css">
    <link rel="stylesheet" href="css/style_Herramientas3.css">
    <title>Aprende</title>
</head>

<body>
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
            include('php/conexion.php');
            session_start();
            if (isset($_POST['btn']) && $_POST['nombre'] != "") {

                $nombre = $_POST['nombre'];

                $sql1 = " SELECT * FROM aprende WHERE Planta = '$nombre'";
                $datos1 = mysqli_query($con, $sql1);
                while ($campo = mysqli_fetch_assoc($datos1)) {


            ?>
                    <div class="images2">
                        <center>
                            <div class="des" id="des">
                                <a href="info.php?id=<?php echo $campo['Planta'] ?>">
                                    <div class="image-box" data-name="si">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($campo['imgP']) ?>">
                                        <h6><?php echo $campo['Planta'] ?></h6>
                                    </div>
                                </a>
                            </div>

                            <center>
                    </div>

                <?php
                }
            } else {
                $sql2 = " SELECT * FROM aprende";
                $datos2 = mysqli_query($con, $sql2);
                while ($campo2 = mysqli_fetch_assoc($datos2)) {

                ?>
                    <div class="des" id="des">
                        <a href="info.php?id=<?php echo $campo2['Planta'] ?>" class="laa" onclick="mostrar1()">
                            <div class="image-box" data-name="si">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($campo2['imgP']) ?>">
                                <h6><?php echo $campo2['Planta'] ?></h6>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
</body>
</html>