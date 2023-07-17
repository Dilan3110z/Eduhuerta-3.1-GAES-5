<?php
include "php/conexion.php";

session_start();
    if(!isset($_SESSION['nombreU'])){
        header("location: Inicio_sesion.php");
    }

    $nombreUsuario=$_SESSION['nombreU'];
    $documento=$_SESSION['Documento_de_identidadU'];

    $sqlNombre=" SELECT nombres FROM usuario WHERE documento='$documento'";
    $resultadosNombre=$con->query($sqlNombre);
    $dato=mysqli_fetch_assoc($resultadosNombre);

    $name = implode($dato);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<title>Estudiante</title>
<link rel="stylesheet" type="text/css" href="css/dashboards12.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
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
                <a href="Perfil.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Mi perfil</span>
                </a>
            </li>
            <!-- <li>
                <a href="aprende.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Aprende</span>
                </a>
            </li> -->
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
<script src="js/Estudiant.js"></script>
<script src="js/si.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
