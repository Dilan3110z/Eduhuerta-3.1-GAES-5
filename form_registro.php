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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Registros3.css">
    <title>Registro</title>
    <style>
        
    </style>
</head>
<body>
 

    <section class="form-register">
        <form method="post" action="php/reg_usuario.php" id="formReg" class="form_reg">
        <center>
            <h2>Formulario de Registro</h2>

            <div class="form_grupo" id="form_Apellido">
                <input type="text" name="nombres" placeholder="Nombre" class="controls" id="Apellido" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){5})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{5,15}" required>
                <p class="form_mensaje-error">El nombre solo puede contener letras, espacios y maximo 40 caracteres</p>
            </div>
            <div class="form_grupo" id="form_Apellido">
                <input type="text" name="apellidos" placeholder="Apellidos" class="controls" id="Apellido" pattern="(?=(?:.*[A-Za-záéíóúÁÉÍÓÚñÑüÜ]){5})[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]{5,15}" required>
                <p class="form_mensaje-error">El nombre solo puede contener letras, espacios y maximo 40 caracteres</p>
            </div>        

        <select name="Curso" id="Curso" class="controls">

            <option value="1">901</option>
            <option value="2">902</option>
            <option value="3">903</option>
            <option value="4">904</option>

            <option value="5">1001</option>
            <option value="6">1002</option>
            <option value="7">1003</option>
            <option value="8">1004</option>

            <option value="9">1101</option>
            <option value="10">1102</option>
            <option value="11">1103</option>
            <option value="12">1104</option>
        </select>
        
          <select name="Jornada" id="Profe" class="controls">
            <option value="mañana" >Mañana</option>
            <option value="tarde"  >Tarde</option>
          </select>

        <div class="form_grupo" id="form_Documento">
            <input type="text" name="Documento_de_identidad" placeholder="Documento de identidad"  class="controls" id="Documento" pattern="[0-9]{10}" required>
            <p class="form_mensaje-error">El Documento solo puede contener numeros y maximo 10 numeros</p>        
        </div>

        <div class="form_grupo" id="Usuario">
            <input type="hidden" name="Usuario" class="controls" value="Estudiante">
            <p class="form_mensaje-error">El Documento solo puede contener numeros y maximo 10 numeros</p>        
        </div>
            
        <div class="form_grupo" id="form_Contra">
            <input type="password" name="Contrasena" id="Contra" class="controls" placeholder="Digite su contraseña" pattern="^(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}$" required>
            <p class="form_mensaje-error">Debe tener, numeros, simbolos y 8 caracteres minimo</p>   
        </div>

        <div class="form_grupo" id="form_contra2">
            <input type="password" name="Confirmacion" id="contra2" class="controls" placeholder="Confirme su contraseña" pattern="^(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}$" required>
            <p class="form_mensaje-error">Las contraseñas deben coincidir</p>
        </div>
        
        <button type="submit" name="boton" class="btn-neon">Registrate</button><br><br>
        <p><a href="Inicio_sesion.php">¿Ya tienes cuenta?</a></p>
    </form>
</center>
</section>

<script src="js/validacioness.js"></script>

</body>
</html>