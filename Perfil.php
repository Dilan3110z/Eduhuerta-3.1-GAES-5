<?php
include "php/conexion.php";

session_start();
    if(!isset($_SESSION['nombreU'])){
        header("location: Inicio_sesion.php");
    }

    $nombreUsuario=$_SESSION['nombreU'];
    $cursoU=$_SESSION['cursoU'];
    $jornadaU=$_SESSION['jornadaU'];
    $Documento_de_identidadU=$_SESSION['Documento_de_identidadU'];
    $HorasU=$_SESSION['HorasU'];

    $sqlNombre=" SELECT nombres FROM usuario WHERE documento='$Documento_de_identidadU'";
    $resultadosNombre=$con->query($sqlNombre);
    $dato=mysqli_fetch_assoc($resultadosNombre);
    $name = implode($dato);

    $sqlCurso=" SELECT id_curso FROM usuario WHERE documento='$Documento_de_identidadU'";
    $resultadosCurso=$con->query($sqlCurso);
    $dato1=mysqli_fetch_assoc($resultadosCurso);
    $curso = implode($dato1);

    $sql4 = " SELECT jornada, documento FROM usuario WHERE documento='$Documento_de_identidadU' ";
    $consulta4 = mysqli_query($con, $sql4);
    $campos = mysqli_fetch_assoc($consulta4);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7450481596.js" crossorigin="anonymous"></script>
    <title>Perfil de usuario</title>

</head>
<body>
  
  <section class="seccion-perfil-usuario">
    <div class="perfil-usuario-header">
        <div class="perfil-usuario-portada">
            <div class="perfil-usuario-avatar">
                <img src="IMG/estudiante.jpg" alt="img-avatar">
              
            </div>
        
        </div>
    </div>
    <div class="perfil-usuario-body">
        <div class="perfil-usuario-bio">
            <h3 class="titulo">informacion del estudiante</h3>
            
        </div>
       
        <div class="perfil-usuario-footer">
            <ul class="lista-datos">
               <li><i class="fa-solid fa-user-astronaut"></i> Nombre y apellido: <?php echo $name; ?></li>
                <li><i class="fa-solid fa-calendar"></i> Curso: <?php echo $curso; ?></li>
                <li><i class="fa-solid fa-id-card"></i> jornada: <?php echo $campos['jornada']?></li>
                <li><i class="fa-solid fa-id-card"></i> Documento: <?php echo $campos['documento']?></li>
                <!-- <li><i class="fa-solid fa-id-card"></i> Horas: <?php echo $campos['Horas']?></li> -->
            </ul>
            <a href="php/reporte.php" target="_blank" class="btn-pdf btn">REPORTE PDF</a>
  
   <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>