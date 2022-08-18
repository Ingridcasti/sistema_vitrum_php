<?php
	require("Seguridad.php");
	if (empty($_SESSION['id_usuario'])) 
	{
?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/login.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
</head>
<body>
	<section>
		<h1 class="neon" data-text="VITRUM®">VITRUM®</h1>
		<div class="bgCuadro">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<div class="cuadro">
        		<img src="../imagenes/logo_login.png" class="logo">
            	<h1>Inicio de Sesión</h1>
                <form action="Seguridad.php" method="post">
                	<p>Usuario</p>
                	<input type="text" style="text-transform:lowercase" name="nombre_u" placeholder="Nombre de Usuario" required maxlength="10">
                	<p>Contraseña</p>
                	<input type="password" name="contra" placeholder="Contraseña" required maxlength="15">
                	<input type="submit" name="inicio" value="Iniciar">
                	<a href="recuperar_contraseña.php">¿Olvidaste tu contraseña?</a>    
                </form>    
            </div>
		</div>
	</section>
</body>
</html>
<?php
	}
	else
	{
		echo "<script> alert('Sesión ya iniciada'); window.location= 'mdi_vitrumhn.php'</script>";
	}
?>