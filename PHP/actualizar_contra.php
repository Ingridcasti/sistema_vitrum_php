<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/actualizar_contra.css">
	<script src="../JS/actualizar_contra.js"></script>
</script> 
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
            	<h1>Actualizar Contraseña</h1>
                <form action="Seguridad.php" method="post" onsubmit="return comprobarclave(this);">
	               	<p>Ingrese su nueva contraseña</p>
	                <input type="password" id="n_contra" name="n_contra" placeholder="Nueva Contraseña" required minlength="6">
	                <p>Confirmar contraseña</p>
	                 <input type="password" id="confirmar" name="confirmar" placeholder="Confirmar Contraseña" required minlength="6">
	                <p>Correo Electronico</p>
	                <input type="text" id="correo" name="correo" placeholder="Correo Electronico" required 
	                pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
	                <input type="submit" name="confirmar" value="Confirmar">	 
               	</form>    
            </div>
		</div>
	</section>
</body>
</html>