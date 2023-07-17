<?php
    require("php/conexion.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registros3.css">
    <title>Registro</title>
    <style>
        
    </style>
</head>
<body>

    <section class="form-register">
        <form method="post" action="php/reg_profe.php" id="formReg" class="form_reg">
        <center>
            <h2>Registro profesor</h2>

            <div class="form_grupo" id="form_Nombre">
                <input type="text" name="Nombre_y_Apellidos" placeholder="Nombre y apellidos" class="controls" id="Nombre" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){5})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{5,15}" required>
                <p class="form_mensaje-error">El nombre solo puede contener letras, espacios y maximo 40 caracteres</p>
            </div>    
        <select name="Jornada" id="Profe" class="controls">
            <option value="mañana" >Mañana</option>
            <option value="tarde"  >Tarde</option>
          </select>

          <input type="hidden" name="Usuario" class="controls" value="Profesor" id="Usuario">

        <div class="form_grupo" id="form_Documento">
            <input type="text" name="Documento_de_identidad" placeholder="Documento de identidad"  class="controls" id="Documento" pattern="[0-9]{10}" required>
            <p class="form_mensaje-error">El Documento solo puede contener numeros y maximo 10 numeros</p>        
        </div>
            
        <div class="form_grupo" id="form_Contra">
            <input type="password" name="Contrasena" id="Contra" class="controls" placeholder="Digite su contraseña" pattern="^(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}$" required>
            <p class="form_mensaje-error">La contraseña debe tener letras mayusculas y minusculas, numeros y simbolos</p>   
        </div>

        <div class="form_grupo" id="form_contra2">
            <input type="password" name="Confirmacion" id="contra2" class="controls" placeholder="Confirme su contraseña" pattern="^(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}$" required>
            <p class="form_mensaje-error">Las contraseñas deben coincidir</p>
        </div>
        
        <input type="submit" name="boton" class="btn-neon" value="Registrate"><br><br>
        <p><a href="Inicio_sesion.php">¿Ya tienes cuenta?</a></p>
    </form>
    <center>
</section>

<script src="js/andres.js"></script>

</body>
</html>