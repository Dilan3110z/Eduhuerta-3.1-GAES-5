<?php
    require("php/conexion.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style_inicio1.css">
  <title>Inicio de Sesion</title>
</head>
<body>

  <form action="php/acceder_usuario.php" method="POST" class="form-register" id="formReg">
    <h4>Inicio de Sesion</h4>
    <div class="form_grupo" id="form_correo">
      <input class="controls" type="text" name="Documento_de_identidad" id="documento" placeholder="Ingrese su Documento">
    </div>  
    
    <div class="form_grupo" id="form_Contra">
      <input class="controls" type="password" name="Contrasena" id="Contra" placeholder="Ingrese su Contraseña">
    </div>

      <button type="submit" name="btnAcceder" class="btn-neon">Iniciar Sesion</button><br><br>
    <p><a href="form_registro.php">Registrate</a></p>
  </form>


</body>
</html>