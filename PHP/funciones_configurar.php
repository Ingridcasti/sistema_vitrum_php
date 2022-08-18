<?php
	require("Conexion.php");
	require("Seguridad.php");
@	$c_contra=$_POST['cambiar_contras'];
@	$c_correo=$_POST['cambiar_correo'];
@	$c_telefono=$_POST['cambiar_telefono'];

@	$nombreimg=$_FILES['imagen']['name'];
@	$archivo=$_FILES['imagen']['tmp_name'];
@	$ruta='../imagenes/fotos_perfil';
	$ruta=$ruta."/".$nombreimg;
	move_uploaded_file($archivo, $ruta);
	
	if (empty($nombreimg)) 
	{
		if (empty($c_contra)) 
		{
			if (empty($c_correo)) 
			{
					$sql = mysqli_query($mysqli, "UPDATE empleados SET telefono = '$c_telefono' WHERE id_empleado = '$_SESSION[id_usuario]'");
					echo " <script> alert ('Telefono Guardado con éxito'); window.location = 'configuracion.php'</script>";
			}
			else
			{
				$sql = mysqli_query($mysqli, "UPDATE usuarios SET correo_electronico = '$c_correo' WHERE id_usuario = '$_SESSION[id_usuario]'");
				$sql2 = mysqli_query($mysqli, "UPDATE empleados SET correo_elec = '$c_correo' WHERE id_empleado = '$_SESSION[id_usuario]'");
				echo " <script> alert ('Correo Electrónico cambiado con éxito'); window.location = 'configuracion.php'</script>";
			}	
		}
		else
		{
			$clavee=encrip::encriptar($c_contra);
			$sql = mysqli_query($mysqli, "UPDATE usuarios SET contras = '$clavee' WHERE id_usuario = '$_SESSION[id_usuario]'");
			echo " <script> alert ('Contraseña Guardada con éxito'); window.location = 'configuracion.php'</script>";
		}			
	}
	else
	{
		$sql=mysqli_query($mysqli, "UPDATE usuarios SET dir_imagen = '$ruta' WHERE id_usuario = '$_SESSION[id_usuario]'");
		echo " <script> alert ('Fotografía Guardada con éxito'); alert ('Reiniciar sesión para actualizar datos'); window.location = 'configuracion.php'</script>";
	}
?>

