<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_estudi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>listado</title>
    <?php    
        include "php/conexion.php";
        session_start();
    ?>
</head>
<body>
    <div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
        <div class="toggle">
        <a href="profesores.php"><i class="fa-solid fa-arrow-left"></i></a>
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
            
            $sql3="SELECT Usuario FROM usuario";

            $consulta3= $con->query($sql3);
            $data3=mysqli_fetch_assoc($consulta3);
            $Usuario= implode($data3);

                
            while($campo=mysqli_fetch_assoc($datos)){
       
       ?>
       <form method="POST" action="php/modificar_est.php">
            <tbody>
            <tr>
            <td><input type="checkbox" name="seleccion[]" value="<?php echo $campo['idregistro'] ?>"></td>
                    <td><?php echo $campo['Nombre_y_Apellidos'] ?></td>
                    <td><?php echo $campo['Curso'] ?></td>
                    <td><?php echo $campo['Jornada']?></td>
                    <td><?php echo $campo['Documento_de_identidad'] ?></td>
                    <td><?php echo $campo['Horas']?></td>

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
    navigation.onclick = function(){
        navigation.classList.toggle('active');
    } 
</script>
<script src="js/app.js"></script> 
</body>
</html>