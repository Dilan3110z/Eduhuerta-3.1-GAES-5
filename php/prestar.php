<?php

    require("conexion.php");

    $cod_Herra = $_GET['id'];

    $sql4 = " SELECT * FROM historico_herramientas WHERE id_his_her='$cod_Herra' ";
    $consulta4 = mysqli_query($con, $sql4);

    $campos = mysqli_fetch_assoc($consulta4);


    $sql5="SELECT id_usuario FROM historico_herramientas where id_his_her='$cod_Herra'";

    $consulta5= $con->query($sql5);
    $data5=mysqli_fetch_assoc($consulta5);
    $usuario_idregistro= implode($data5);

    $sql2="SELECT nombres FROM usuario WHERE id_usuario=$usuario_idregistro";

    $consulta2= $con->query($sql2);
    $data2=mysqli_fetch_assoc($consulta2);
    $nombre= implode($data2);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>CONSULTA DE DATOS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style_modi.css">
    </head>
    
    <body> 
        <div>
            

            <form method="POST" action="" class="form-register">
            <center>
            <h1>FORMULARIO DE GESTION PRESTAMO</h1>
            <input type="hidden" class="controls" name="id" value=" <?php echo $campos['id_his_her'] ?> ">
            <input type="hidden" class="controls" id="herra" name="herram" value="<?php echo $campos['id_inv_her'] ?>" >
            <br>
            <br>
            <label for="">Encargado</label>
            <input type="text" class="controls" id="encar" name="encargado" value="<?php echo $nombre?>">
            
            <label for="">Fecha</label>
            <input type="datetime-local" class="controls" id="fecha" name="fechaPres">
            <br>
            <br>
            <input id="btnEnviar" class="btn-neon" type="submit" name="formBtnActu" value="PRESTAR" />
            </center>
        </form>
    </div>

    <?php

if(isset($_POST['formBtnActu']) && $_POST ['id']!="" && $_POST ['herram']!="" && $_POST ['encargado']!=""  && $_POST ['fechaPres']!=""){

            $idHerramienta=$_POST['id'];
            $nom_herra=$_POST['herram'];
            $encargado=$_POST['encargado'];
            $fechaPres=$_POST['fechaPres'];
    
            $sql3="SELECT id_usuario FROM usuario WHERE nombres='$encargado'";

            $consulta3= $con->query($sql3);
            $data3=mysqli_fetch_assoc($consulta3);
            $resive= implode($data3);


            $sql1 = "UPDATE historico_herramientas SET id_inv_her ='$nom_herra', id_usuario='$resive', fecha_entrega='$fechaPres' WHERE id_his_her  ='$idHerramienta'";
            $consulta1 = mysqli_query($con, $sql1);
    
                if($consulta1){
                    echo '<script>
                    window.history.go(-2);
                    </script>';
            exit;
                }
            }
    ?>
    </body>


</html>
