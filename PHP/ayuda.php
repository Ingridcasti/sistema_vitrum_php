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
	<link rel="stylesheet" type="text/css" href="../CSS/ayuda.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
	<link rel="stylesheet" type="text/css" href="../CSS/redes_mdi.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nivo-slider.css">
	<script src="../JS/jquery.min.js" type="text/javascript"></script>
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
		
		<div class="caja">
			<h1><span class="icon-help"></span> Indice De Ayuda</h1>
			<dir class="contenido">
				<a href="ayuda_menu_inicio.php"><h2>1- Inicio</h2></a>
				<a href="ayuda_menu_inicio.php"><h3>1.1- Botones Del Menu</h3></a>
				<a href="ayuda_menu_inicio.php"><h3>1.2- Sección Puerta</h3></a>
				<a href="ayuda_menu_inicio.php"><h3>1.3- Sección Ventana</h3></a>
				<a href="ayuda_menu_inicio.php"><h3>1.4- Sección Proyectos</h3></a>
				<a href="ayuda_menu_inicio.php"><h3>1.5- Sección Otros</h3></a>
				<a href="ayuda_redes.php"><h3>1.6- Barra Redes Sociales</h3></a>
				<a href="ayuda_redes.php"><h3>1.7- Barra Lateral Privacidad</h3></a>
				<a href="ayuda_redes.php"><h4>1.7- Privacidad</h4></a>
				<a href="ayuda_redes.php"><h4>1.7- Permisos De Uso</h4></a>
				<a href="ayuda_redes.php"><h4>1.7- Ayuda</h4></a>
				<a href="ayuda_redes.php"><h4>1.7- Redes</h4></a>
                <a href="ayuda_menu.php"><h2>2- Menu</h2></a>
				<a href="ayuda_menu.php"><h3>2.1- Agregar Usuario </h3></a>
				<a href="ayuda_menu.php"><h3>2.2- Nuevo Pedido</h3></a>
				<a href="ayuda_menu.php"><h3>2.3- Nuevo presupuesto</h3></a>
				<a href="ayuda_menu.php"><h3>2.4- Configuración</h3></a>
				<a href="ayuda_inventario.php"><h2>3- Inventario</h2></a>
				<a href="ayuda_inventario.php"><h3>3.1- Proveedores </h3></a>
				<a href="ayuda_inventario.php"><h3>3.2- Producto</h3></a>
				<a href="ayuda_inventario.php"><h3>3.2- Materiales</h3></a>
			
			</dir>
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