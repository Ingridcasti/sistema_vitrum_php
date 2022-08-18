<?php
	require("Conexion.php");
@	$nombre=$_POST['Nombr'];
@   $descripcion=$_POST['descprov'];
@	$direccion=$_POST['DIRpro'];
@	$telefono=$_POST['Telefono'];
@	$correo=$_POST['correo']; 
@	$id_provee=$_POST['codigo_pro'];
@	$nombre_provee=$_POST['nombre_provee'];
@	$correo_provee=$_POST['correo_provee'];
@	$telefono_provee=$_POST['telefono_provee'];
@	$dir_provee=$_POST['dir_provee'];
@	$descri_provee=$_POST['descri_provee'];
@	$id=$_GET['id_proveedor'];
	if (empty($id))
	{
		if ($nombre && $descripcion && $direccion && $telefono && $correo && $id_provee) 
		{
			$sql=mysqli_query($mysqli, "UPDATE proveedores SET nombre_proveedor= '$nombre', descripcion_proveedor = '$descripcion', direccion_proveedor ='$direccion', telefono_proveedor ='$telefono', correo_electronico = '$correo' WHERE id_proveedor='$id_provee'");
			header("location: proveedores.php");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
		}
		elseif ($nombre_provee && $correo_provee && $telefono_provee && $dir_provee && $descri_provee) 
		{
			$sql=mysqli_query($mysqli, "INSERT INTO proveedores(nombre_proveedor, descripcion_proveedor, telefono_proveedor, correo_electronico, direccion_proveedor) VALUES ('$nombre_provee', '$descri_provee', '$telefono_provee', '$correo_provee', '$dir_provee')");
			header("location: proveedores.php");
		}
	}
	else
	{
		$sql=mysqli_query($mysqli, "DELETE FROM proveedores WHERE id_proveedor = '".$id."'");
		$sql2=mysqli_query($mysqli, "SET @autoid :=0");
		$slq3=mysqli_query($mysqli, "UPDATE proveedores SET id_proveedor = @autoid := (@autoid+1)");
		$sql4=mysqli_query($mysqli, "ALTER TABLE proveedores AUTO_INCREMENT = 1");
		header("location: proveedores.php");
		Echo '<script>alert("Datos Modificdos Con Exito")</script>';
	}
?>