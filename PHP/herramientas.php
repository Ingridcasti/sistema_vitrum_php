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
	<title>Menu VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/herramientas.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="../CSS/redes_mdi.css">
	<script src="../JS/jquery.min.js" type="text/javascript"></script>
	<script src="../JS/jquery.nivo.slider.js"></script>
	<script src="../JS/menu.js"></script>
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
	    <div class="cuerpo1">
	      	<div class="vi">
	        	<img  class="imgn" src="../imagenes/logo_login.png">
	        	 <h1>VITRUM®</h1>
	      	</div>
	      	<div class="box">
	      		<a href="herramientas.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Herramientas De Cortes
			       </a>
		      		<a href="backup-bd.php">
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			Copia de Seguridad y Respaldo 
		      		</a>
	   		</div>	
	    </div> 
	    	<div class="cuerpo">  
    			<div class="cuadro1">
    				<div class="herra">
    					
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