<?php
    require("conexion.php");
	session_start();
	
if(isset($_SESSION['nombreU'])){
        header("location: ../Estudiantes.php");
     }

	 	if(isset($_POST['btnAcceder'])) {

	 		if ($_POST['Documento_de_identidad']!="" && $_POST['Contrasena']!="") {

				$documento=$_POST['Documento_de_identidad'];
	 			$Contrasena=$_POST['Contrasena'];
	 			
	 			$sql="SELECT contrasena FROM usuario WHERE documento='$documento'";

	 			$consulta = $con->query($sql);        		
				$arreglo = mysqli_num_rows ($consulta);

        		$data = mysqli_fetch_assoc($consulta);
        		$hash = implode($data);

				$sql2="SELECT nombres FROM usuario WHERE documento='$documento'";

				$consulta2= $con->query($sql2);
				$data2=mysqli_fetch_assoc($consulta2);
				$nombreUsr= implode($data2);
				
				$sql3="SELECT id_rol FROM usuario WHERE documento='$documento'";

				$consulta3= $con->query($sql3);
				$data3=mysqli_fetch_assoc($consulta3);
				$Usuario= implode($data3);

				$sql4 = " SELECT id_curso, jornada, documento FROM usuario WHERE documento='$documento' ";
				$consulta4 = mysqli_query($con, $sql4);
				$campos = mysqli_fetch_assoc($consulta4);

	 			if ($arreglo > 0) {

					if(password_verify($Contrasena, $hash) && $Usuario=='1'){
	 				
	 						$_SESSION['iniciar']='ingresar';
							$_SESSION['nombreU']=$nombreUsr;
	 						header("location: ../Profesores.php");

					}else if(password_verify($Contrasena, $hash) && $Usuario=='2'){

						$_SESSION['iniciar']='ingresar';
						$_SESSION['nombreU']=$nombreUsr;
						$_SESSION['cursoU']=$campos['curso'];
						$_SESSION['jornadaU']=$campos['jornada'];
						$_SESSION['Documento_de_identidadU']=$campos['documento'];
						$_SESSION['HorasU']=$campos['Horas'];
						
						 header("location: ../Estudiantes.php");
					
					}else{
						echo "el documento y contraseña no coinciden";
						header("location: ../Inicio_sesion.php");	
					}
				
				}else{
				
					echo "No esta registrado; registrese por favor";
             	}
	 		}
	 	}

?>