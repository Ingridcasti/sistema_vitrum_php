<?php
	require("Conexion.php");

@	$correo=$_POST['correo_emp'];
@   $telefono=$_POST['telefono_emp'];
@	$direccion=$_POST['dir_emp'];
@	$id_emp=$_POST['id_empleado'];
@	$id=$_GET['id_empleado'];
@	$id_a=$_GET['d_empleado'];

@	$pnom=$_POST['p_nombre'];
@   $snom=$_POST['s_nombre'];
@	$pape=$_POST['p_apellido'];
@	$sape=$_POST['s_apellido'];
@	$dir=$_POST['direccion'];
@   $correon=$_POST['correo'];
@	$iden=$_POST['identidad'];
@	$tel=$_POST['telefono'];
@	$t_usu=$_POST['tipo_usuario'];
@	$psswd = $_POST['contrausu'];

@	$pnoms = substr($pnom, 0,1);
@	$snoms = substr($snom, 0,1);
@	$paps = substr($pape, 0,3);
@	$nids = substr($iden, 10);

@	$nomusu = $pnoms . $snoms . $paps . $nids;



    define('METHOD','AES-256-CBC');
    define('SECRET_KEY','$VITRUMHN@2016');
    define('SECRET_IV','101712');

	class encrip
	{
	public static function encriptar($string){
            $output=FALSE;
            $key=hash('sha256', SECRET_KEY);
            $iv=substr(hash('sha256', SECRET_IV), 0, 16);
            $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
            $output=base64_encode($output);
            return $output;
        } 
    }

	$pass=encrip::encriptar($psswd); 

	if (empty($id or $id_a))
	{
		if ($correo && $telefono && $direccion) 
		{
			$sql=mysqli_query($mysqli, "UPDATE empleados SET correo_elec= '$correo', telefono = '$telefono', direccion ='$direccion' WHERE id_empleado='$id_emp'");
			header("location: inventario.php");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
		}
		elseif ($pnom && $snom && $pape && $sape && $dir && $correon && $iden && $tel && $nomusu && $psswd) 
		{
			$codigo = substr($t_usu, 0, 1);
			$sql=mysqli_query($mysqli, "INSERT INTO empleados(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, correo_elec, telefono, numero_identidad, direccion, id_estado) VALUES ('$pnom', '$snom', '$pape', '$sape', '$correon', '$tel', '$iden', '$dir', '1')");

			$sql1=mysqli_query($mysqli, "INSERT INTO usuarios(nombre_usuario, contras, correo_electronico, id_tipo_usuario, id_estado) VALUES ('$nomusu', '$pass', '$correon', '$codigo', '1')");
			echo"<script type='text/javascript'>
			var nomusu = '$nomusu';
    alert('Su nombre de usuario es:'+' '+nomusu);
    window.location.href='inventario.php';
    </script>";
		}
	}
	else
	{
		if (isset($id)) 
		{
			$sql=mysqli_query($mysqli, "UPDATE empleados SET id_estado = '3' WHERE id_empleado='$id'");
			$sql3=mysqli_query($mysqli, "UPDATE usuarios SET id_estado = '3' WHERE id_usuario='$id'");
			header("location: inventario.php");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
		}
		elseif (isset($id_a)) 
		{
			$sql=mysqli_query($mysqli, "UPDATE empleados SET id_estado = '1' WHERE id_empleado='$id_a'");
			$sql3=mysqli_query($mysqli, "UPDATE usuarios SET id_estado = '1' WHERE id_usuario='$id_a'");
			header("location: inventario.php");
			Echo '<script>alert("Datos Modificdos Con Exito")</script>';
		}
		
	}

?>

