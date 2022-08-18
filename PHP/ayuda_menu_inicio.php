<?php
	require("Seguridad.php");
	if (empty($_SESSION['id_usuario'])) 
	{
  		echo "<script> alert('Debe Iniciar Sesión'); window.location= 'login.php'</script>";
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Ayuda VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/ayuda_menu_inicio.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="../CSS/redes_mdi.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="../JS/jquery.nivo.slider.js"></script>
	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</head>
<header>
	<nav>
			<ul class="menu">
				<li><a href="mdi_vitrumhn.php"><span class="icon-home"></span></a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="inventario.php">Inventario</a></li>
				<li><a href="herramientas.php">Herramienta</a></li>
				<li><a href="ayuda.php">Ayuda</a></li>
				<li><a href="estadisticas.php">Estadísticas</a></li>
			</ul>
		</nav>		
</header>
<body>
		<div class="social">
				<div class="barr">
				<ul>
					<li>
						<a href="https://www.facebook.com/vitrumhonduras/" target="_blank" title="Facebook"><i class="ico icon-facebook1"></i></a>
					</li>
					<li>
						<a href="https://myaccount.google.com" target="_blank" title="Correo"><i class="ico icon-google1"></i></a>
					</li>
					<li>
						<a href="mailto:losparceshn@gmail.com" target="_blank" title="Gmail"><i class="ico icon-mail"></i></a>
					</li>
					<li>
						<a href="http://www.skype.com" target="_blank" title="Skype"><i class="ico icon-skype1"></i></a>
					</li>
					<li>
						<a href="http://www." target="_blank" title="Whatsapp"><i class="ico icon-whatsapp"></i></a>
					</li>
					<li>
						<a href="cerrar_sesion.php" target="_blank" title="Cerrar Sesión"><i class="ico icon-log-out"></i></a>
					</li>
				</ul>
			</div>				
		</div>			
		
		<div class="cuerpo">
			<p>
				Menu Inicio
			</p>
			<h2><span class="icon-home"></span> Boton Home</h1>
			<img src="../imagenes/manual/boton_home.png" class="imgn">
			<h2><span class="icon-main"></span> Boton Menu</h1>
			<img src="../imagenes/manual/boton_menu.png" class="imgn">
			<h2><span class="icon-main"></span> Boton Inventario</h1>
			<img src="../imagenes/manual/boton_inventario.png" class="imgn">
			<h2><span class="icon-main"></span> Boton Herramienta</h1>
			<img src="../imagenes/manual/boton_herramientas.png" class="imgn">
			<h2><span class="icon-main"></span> Boton Ayuda</h1>
			<img src="../imagenes/manual/boton_ayuda.png" class="imgn">
			<h2><span class="icon-main"></span> Boton Estadisticas</h1>
			<img src="../imagenes/manual/boton_estadisticas.png" class="imgn">
		</div>

		<div class="pie">
			<ul>
				<li><a href="privacidad.php">Privacidad</a></li>
				<li><a href="privacidad.php">Permisos De Uso</a></li>
				<li><a href="ayuda.php">Ayuda</a></li>
				<li><a href="redes.php">Redes</a></li>
			</ul>
		</div>
	</body>
</html>
<?php
	}
?>