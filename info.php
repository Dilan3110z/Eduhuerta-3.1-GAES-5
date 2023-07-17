<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/informacion.css">
    <link rel="stylesheet" href="css/style_Herramientas4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php
    include('php/conexion.php');
    session_start();

    $Planta = $_GET['id'];
    $sql5 = "SELECT * FROM aprende WHERE Planta='$Planta'";
    $datos5 = mysqli_query($con, $sql5);
    while ($campo5 = mysqli_fetch_assoc($datos5)) {

    ?>
        <div class="details2">
            <div class="recentOrders1">
            <div class="img">
                <h6>Informacion de <?php echo $campo5['Planta'] ?> <br></h6>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($campo5['imgP']) ?>">
                    </div>
                <div class="container">
                    <div class="riego">
                        <span class="primero">
                            <ion-icon name="water-outline"></ion-icon><br>
                        </span>
                        <h1><?php echo $campo5['Riego'] ?></h1>
                    </div>
                    <div class="resipiente">
                        <span class="segundo">
                            <ion-icon name="trash-bin-outline"></ion-icon><br>
                        </span>
                        <h1>Plantar en un <?php echo $campo5['Litros'] ?></h1>
                    </div>
                </div>
                <div class="info"> 
                    <h2><?php echo $campo5['informacion'] ?></h2>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>