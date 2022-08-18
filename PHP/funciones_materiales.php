<?php
	require("Conexion.php");
@	$descripcion=$_POST['des_ma'];
@   $precio_bn=$_POST['p_bn'];
@	$precio_ma=$_POST['p_m'];
@	$precio_es=$_POST['p_e'];
@	$cod_mate=$_POST['cod_mat'];

@	$id_materia=$_POST['cod_ma'];
@	$descripcion_material=$_POST['desc_ma'];
@	$tipo_material=$_POST['tipo_ma'];
@	$precio_bl_n=$_POST['p_b_n'];
@	$precio_m=$_POST['p_ma'];
@	$precio_est=$_POST['p_es'];
@	$cod_pro=$_POST['cod_producto'];
	$codigo = substr($cod_pro, 0, 5);
	if ($descripcion && $precio_bn && $precio_ma && $precio_es ) 
		{
			$sql=mysqli_query($mysqli, "UPDATE materiales SET descripcion_material= '$descripcion', precio_blanco_negro ='$precio_bn', precio_madera ='$precio_ma', precio_estandar  = '$precio_es' WHERE codigo_material='$cod_mate'");
			header("location: materiales.php");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
		}
		elseif ($id_materia && $descripcion_material && $tipo_material && $precio_bl_n && $precio_m && $precio_est && $codigo) 
		{
			$sql=mysqli_query($mysqli, "INSERT INTO materiales(codigo_material, descripcion_material , tipo_material , precio_blanco_negro, precio_madera , precio_estandar , codigo_producto) VALUES ('$id_materia', '$descripcion_material', '$tipo_material', '$precio_bl_n', '$precio_m', '$precio_est', '$codigo')");
			header("location: materiales.php");
		}
?>