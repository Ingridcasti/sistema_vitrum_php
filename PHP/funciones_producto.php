<?php
	require("Conexion.php");
@	$cod_prod=$_POST['cod_pro'];
@	$nombre_prod=$_POST['nombre_pro'];
@	$precio_prod=$_POST['precio_pro'];
@	$desc_prod=$_POST['descrip_pro'];
@	$nom_prod=$_POST['nom_pro'];
@	$pre_prod=$_POST['pre_pro'];
@	$des_productos=$_POST['des_prod'];
@	$cod_pro=$_POST['codigo_productos'];
@	$nombreimg=$_FILES['imagen']['name'];
@	$archivo=$_FILES['imagen']['tmp_name'];
@	$ruta='../imagenes/direccion_productos';
	$ruta=$ruta."/".$nombreimg;
	move_uploaded_file($archivo, $ruta);
		
	if ($nom_prod && $pre_prod && $des_productos) 
		{
			$sql=mysqli_query($mysqli, "UPDATE productos SET nombre_producto = '$nom_prod', precio_producto = '$pre_prod', descripcion_producto ='$des_productos' WHERE codigo_productos='$cod_pro'");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
			header("location: productos.php");
			
		}	
	elseif ($nombre_prod && $precio_prod && $desc_prod && $ruta)
		{
			$sql=mysqli_query($mysqli, "INSERT INTO productos(codigo_productos, nombre_producto, precio_producto, descripcion_producto, imagen_producto) VALUES ('$cod_prod', '$nombre_prod', ".$precio_prod.", '$desc_prod', '$ruta')");
			header("location: productos.php");
		}
?>