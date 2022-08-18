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
	<title>Menu VITRUMHN®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/mdi_vitrumhn.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="../CSS/redes_mdi.css">
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
		<script src="../JS/mdi_vitrumhn.js" type="text/javascript"></script>
			<div class="main">	
				<div class="slider-wrapp theme-mi-slider">
				<div id="slider" class="nivoSlider">     
				    <img src="../imagenes/slideshow/1.jpg" alt="" title="#htmlcaption"/>     
				    <img src="../imagenes/slideshow/2.jpg" alt="" title="#htmlcaption"/>    
				    <img src="../imagenes/slideshow/3.jpg" alt="" title="#htmlcaption"/>
				    <img src="../imagenes/slideshow/4.jpg" alt="" title="#htmlcaption"/>     
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<h1>VITRUM®</h1>
				</div>
			</div>
		</div>			
</header>
<body>
		<div class="social">
			<div class="barr">
				<ul>
					<li>
						<a href="https://www.facebook.com/vitrumhonduras/" target="_blank" title="Facebook"><i class="ico icon-facebook1"></i></a>
					</li>
					<li>
						<a href="https://myaccount.google.com" target="_blank" title="Gmail"><i class="ico icon-google1"></i></a>
					</li>
					<li>
						<a href="mailto:losparceshn@gmail.com" target="_blank" title="Correo"><i class="ico icon-mail"></i></a>
					</li>
					<li>
						<a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1568778668&rver=7.1.6819.0&wp=MBI_SSL&wreply=https%3A%2F%2Flw.skype.com%2Flogin%2Foauth%2Fproxy%3Fclient_id%3D572381%26redirect_uri%3Dhttps%253A%252F%252Fweb.skype.com%252FAuth%252FPostHandler%26state%3D8b473380-eaa1-4567-9818-5898f9e66cb5%26site_name%3Dlw.skype.com&lc=1033&id=293290&mkt=es-ES&psi=skype&lw=1&cobrandid=2befc4b5-19e3-46e8-8347-77317a16a5a5&client_flight=ReservedFlight33%2CReservedFlight67" target="_blank" title="Skype"><i class="ico icon-skype1"></i></a>
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
		<div class="contenedor">
			<div class="caja">
				<div class="contenido">
					<h2>01</h2>
					<h3>Puertas</h3>
					<p>Estética y funcionales, ideales para los espacios interiores y exteriores, las puertas de Vitrum® son una buena elección por su acabado, textura y variedad de colores.</p>
					<a href="mdi_vitrumhn.php">Ver</a>
				</div>
			</div>
			<div class="caja">
				<div class="contenido">
					<h2>02</h2>
					<h3>Ventanas</h3>
					<p>Nuestros diseños cuentan con los accesorios de mayor calidad, con los más finos cortes, ventanas que aislan al máximo el ruido y calor, pensadas para todos los espacios aún hasta los más pequeños para una buena ventilación.</p>
					<a href="mdi_vitrumhn.php">Ver</a>
				</div>
			</div>
			<div class="caja">
				<div class="contenido">
					<h2>03</h2>
					<h3>Proyectos</h3>
					<p>Vitrum® es la empresa que fortalecerá sus proyectos, facilitándole soluciones eficaces, analizadas con responsabilidad y honestidad.</p>
					<a href="mdi_vitrumhn.php">Ver</a>
				</div>
			</div>
			<div class="caja">
				<div class="contenido">
					<h2>04</h2>
					<h3>Otros Productos</h3>
					<p>Nuestro compromiso es que usted obtenga la mejor atención, los mejores productos y el mejor servicio. Creemos que un proyecto en Vitrum® es de responsabilidad y satisfacción para nuestros clientes.</p>
					<a href="mdi_vitrumhn.php">Ver</a>
				</div>
			</div>
			</div>

			<div class="linear">
				<div class="barre">
					<h2>Vitrum Honduras: Haciéndole bien con vidrio y aluminio.</h2>
					<h4>Forme parte de nuestra idea de negocios, desarrolle sus ideas con nosotros.</h4>
				</div>
			</div>

			<div class="cuerpo">
				<div class="bar1">
					<img src="../imagenes/logo_login.png" class="img">
					<p>Somos  la  empresa que  usted necesita  para  completar sus proyectos de construcción y remodelación, brindándole toda la confianza  para recibir los resultados que usted tanto espera y demanda en sus proyectos.
					Vitrumhn viene a  convertirse  en la empresa  que fortalecerá sus proyectos,  facilitándole  soluciones  eficaces,  analizadas con responsabilidad y honestidad.</p>
				</div>

				<div class="bar2">
					<div>
						<h1>Misión</h1>
						<p>Ser líderes en ventanas y puertas en aluminio y vidrio para proyectos de construcción y remodelación, ofreciendo los mejores estándares de calidad y brindando garantía y confiabilidad a nuestros clientes, contribuyendo así al desarrollo económico y social del país, a través de un recurso humano altamente profesional y capacitado y de productos con la más alta calidad.</p>
					</div>
					<div>
						<h1>Visión</h1>
						<p>En Vitrum® buscamos cubrir todo el territorio nacional ofreciendo productos de gran calidad para la satisfacción de nuestros clientes, como proveedores de ventanas y puertas en vidrio y aluminio, para grandes y pequeños proyectos de construcción.</p>
					</div>
				</div>

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