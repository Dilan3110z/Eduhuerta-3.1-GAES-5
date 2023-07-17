<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/noreg.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include "php/conexion.php"; ?>
<form method="post" name="formDatosPersonales" id="formReg1" class="form_register">

    <h5>Gestion Herramientas</h5>

    <div class="form_Nombre" id="form_Nombre">
        <input type="text" name="nombre_herramienta" placeholder="nombre de la Herramienta" class="controls" id="Nombre">
    </div>

    <div class="form_estado" id="form_estado">
        <select name="estado" id="estado" class="controls">
            <option value="Bueno">Bueno</option>
            <option value="Malo">Malo</option>
            <option value="Medio">Medio</option>
        </select>
        <input type="hidden" value="No" name="total">
    </div>
    <input type="submit" name="boton" id="boton" class="btn-neon" value="Registrar">
    <br><br>
</form>

<!-- <script src="js/norec.js"></script> -->
<script>
$(document).ready(function(){
    $('#boton').click(function(){
        var datos=$('#formReg1').serialize();

        $.ajax({
           type: "post",
           url: "php/regHer.php",
           data: datos,
           success:function(r){
            if(r==1){
                alert("Agregado con exito");
            }else{
                alert("Fallo")
            }
           }
        });
        return false;
    });
});
</script>
</body>
</html>