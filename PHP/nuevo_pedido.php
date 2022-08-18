<?php
	require("Seguridad.php");
	require("Conexion.php");
	$sql = "SELECT * FROM productos WHERE codigo_productos ='VPB01' OR codigo_productos ='PAP01'";
  	$resultado = $mysqli -> query($sql);
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
	<title>Pedidos VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nuevo_pedido.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nivo-slider.css">
	<script src="../JS/ped.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/redes_mdi.css">
	<script src="../JS/jquery.min.js" type="text/javascript"></script>
	<script src="../JS/jquery.nivo.slider.js"></script>
	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
	<script type="text/javascript"> 
    $(function()
    {
      $(document).on('change', '#mySelect',function(){
        var value = $(this).val();
        $('#myInput').val(value);
      });
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
		      		<a href="menu.php">
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			Agregar Usuario
		      		</a>
			        <a href="nuevo_pedido.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Nuevo Pedido
			       </a>
			        <a href="nuevo_presupuesto.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Nuevo Presupuesto
			       </a>
			        <a href="configuracion.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Configuración
			       </a>
	   		</div>	
	    </div> 
	    <div class="contenedor">
	    	<div class="caja1">
	    		<form action="calculos.php" method="post" onsubmit="return validar(this);"> 
	    		<h2>Crear Pedido</h2>
	    		<div class="dos_columnas">
	    			<p>Seleccione Producto</p>
                     <select name="producto" required>
                        <option></option>
                        <option value="Puerta<">Puerta</option>
                        <option value="ventana">ventana</option>
                    </select>
                    <p>Tipo de Producto</p>
                    <select name="tipoo" required>
                        <option></option>
                        <option value="Aluminio">Aluminio</option>          
                    </select>
	    		</div>
	    		<div class="una_columna">
	    			<select name="productso" id="mySelect" required="">
	    				<option></option>
	    				<?php
                         while ($filas = $resultado -> fetch_array(MYSQLI_BOTH)) 
                         {
                           $cod_pro = $filas['codigo_productos'];
                           $n_pro = $filas['nombre_producto'];
                           ?>
                           <option> <?php echo $cod_pro."-".$n_pro; ?> </option>
                           <?php
                         }
                        ?>  
	    			</select>
	    		</div>
	    		<input type="hidden" name="cod_prod" id="myInput">
                <h2>Ingrese las medidas</h2>
                    <div class="tres_columnas">
    	                <p>Alto</p>
        	            <input type="text" name="Alto" id="alto" placeholder="Ingrese el alto" required>    
	                    <p>Ancho</p>
    	                <input type="text" name="Ancho" id="ancho" placeholder="Ingrese el ancho" required>
	                    <p>Cantidad</p>
    	                <input type="text" name="Cantidad" id="cantidad" placeholder="Ingrese La Cantidad" required>    
                	</div> 
                 <div class="caja3">
	    		<h2>Datos Cliente</h2>
                    <div class="tres_columnas">
                    <p>Nombre</p>
                    <input type="text" name="nombre_c" id="nombre" placeholder="Ingrese Nombre" required> 

                    <p>Apellido</p>
                    <input type="text" name="apellido_c" id="apellido" placeholder="Ingrese Apellido" required>

                    <p>Dirección</p>
                    <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>    
                </div> 

                <div class="tres_columnas">
                    <p>Numero Identidad</p>
                    <input type="text" name="id_i" id="identidad" placeholder="xxxx-xxxx-xxxxx" required> 

                    <p>Dirección Instalación</p>
                    <input type="text" name="instalacion" id="dir" placeholder="Dirección" required>

                    <p>Telefono</p>
                    <input type="text" name="telefono_c" id="telefono" placeholder="Numero De Telefono" required>    
                </div> 
                 <div class="boton">
                    <input type="submit" name="Generar Presupuesto" value="Generar">
                </div>
	    		</div>
	    		</div>
	    		</form>
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