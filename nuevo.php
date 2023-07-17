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
        <form method="post" action="php/almacenarDatosUsuario.php" id="formReg" class="form_reg">
        <a href="profesores.php" style="float: left;"><i class="fa-solid fa-arrow-left"></i></a>
        <center>
            <h2 style="font-size: 32px;">Formulario de Registro</h2>

            <div class="form_grupo" id="form_Nombre">
                <input type="text" name="Nombre_y_Apellidos" placeholder="Nombre y apellidos" class="controls" id="Nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s'-]{5,25}" required>
                <p class="form_mensaje-error">Solo puede contener letras, espacios, min 5 y max 25 caracteres</p>
            </div>    

        <select name="curso" id="curso" class="controls">
            <option value="901">901</option>
            <option value="902">902</option>
            <option value="903">903</option>
            <option value="904">904</option>
            <!-- <option value="905">905</option>
            <option value="906">906</option> -->

            <option value="1001">1001</option>
            <option value="1002">1002</option>
            <option value="1003">1003</option>
            <option value="1004">1004</option>
            <!-- <option value="1005">1005</option> -->

            <option value="1101">1101</option>
            <option value="1102">1102</option>
            <option value="1103">1103</option>
            <option value="1104">1104</option>
          </select>

        <select name="jornada" id="Profe" class="controls">
            <option value="mañana" >Mañana</option>
            <option value="tarde"  >Tarde</option>
          </select>

        <div class="form_grupo" id="form_Documento">
            <input type="text" name="Documento_de_identidad" placeholder="Documento de identidad"  class="controls" id="Documento"  pattern="[0-9]{8}" required>
            <p class="form_mensaje-error">Solo puede contener numeros min 9 y max 10</p>        
        </div>
            
        <div class="form_grupo" id="form_Contra">
            <input type="password" name="Contrasena" id="Contra" class="controls" placeholder="Digite su contraseña" pattern="(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}" required>
            <p class="form_mensaje-error">Debe tener letras mayusculas y minusculas, numeros y simbolos, en este orden</p>   
        </div>

        <div class="form_grupo" id="form_contra2">
            <input type="password" name="Confirmacion" id="contra2" class="controls" placeholder="Confirme su contraseña" pattern="(?!.*['])(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-=_+[\]{}|;:',.<>/?]{8,}" required>
            <p class="form_mensaje-error">Las contraseñas deben coincidir</p>
        </div>
        
        <input type="submit" name="boton" class="btn-neon" value="Registrate"><br><br>
        <p style="height: 20px;"><a href="Inicio_sesion.php">¿Ya tienes cuenta?</a></p>
    </form>
</center>
</section>

<script src="js/registro.js"></script>

</body>
</html>