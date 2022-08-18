<?php
  require("Conexion.php");
  require("Seguridad.php");
  $sql="SELECT * FROM empleados AS E JOIN estado AS S ON E.id_estado = S.id_estado";
  $sql2="SELECT * FROM usuarios";
  $resultado=$mysqli -> query($sql);
  $resultado2=$mysqli -> query($sql2);

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
	<title>Inventario VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/inventario.css">
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

	    <div class="cuerpo1">
	      	<div class="vi">
	        	<img  class="imgn" src="../imagenes/logo_login.png">
	        	 <h1>VITRUM®</h1>
	      	</div>
	      	<div class="box">
		      		<a href="inventario.php">
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			Usuarios
		      		</a>
			        <a href="clientes.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Clientes
			       </a>
			        <a href="proveedores.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Proveedores
			       </a>
			        <a href="productos.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Productos
			       </a>
			       <a href="materiales.php">
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			<span></span>
		       			Materiales
		      		</a>
			        <a href="pedidos.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Pedidos
			       </a>
			        <a href="presupuesto.php">
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		<span></span>
			       		Presupuestos
			       </a>
	   		</div>	
	    </div> 
	    <div class="cuerpo">  
          <div class="cuadro">
          	<a href="menu.php" class="icon-add-user"> Nuevo Usuario</a>
            <h2 class="icon-man"> Empleados</h2>
              <div class="tbla">
                  <table cellpadding="10">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Id_Empleado</th>
                        <th>Estado Empleado</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Correo Electrónico</th>
                        <th>Telefono</th>
                        <th>Numero Identidad</th>
                        <th>Dirección</th>
                        <th>Fecha Registro</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<script type="text/javascript">
                    	function feliminar()
                    	{
                    		var resp = confirm(" Estas seguro que desea Dar De Baja Al Usuario?");
                    		if (resp == true) 
                    		{
                    			return true
                    		}
                    		else
                    		{
                    			return false
                    		}
                    	}
                    	function factivar()
                    	{
                    		var resp = confirm(" Estas seguro que desea Activar al Usuario?");
                    		if (resp == true) 
                    		{
                    			return true
                    		}
                    		else
                    		{
                    			return false
                    		}
                    	}
                    </script>
                      	<?php
                        	while ($filas = $resultado -> fetch_array(MYSQLI_BOTH))
	                    	    {
	                   	?>
	                          <tr>
	                        		<td><a href="modificar_empleado.php?id_empleado=<?php echo $filas['id_empleado'] ?>"> <button type='button' class='btn btn-success'>Modificar</button></a></td>
	                        		<td><a href="funciones_empleado.php?id_empleado=<?php echo $filas['id_empleado'] ?>"> <button type='button' class='btn btn-danger' onclick = "return feliminar();">Dar De Baja</button></a></td>
	                        		<td><a href="funciones_empleado.php?id_empleado=<?php echo $filas['id_empleado'] ?>"> <button type='button' class='btn btn-active' onclick = "return factivar();">Activar</button></a></td>
	                        	    <td> <?php echo $filas['id_empleado'];?> </td>
			                        <td> <?php echo $filas['descripcion_estado'];?> </td>
			                        <td> <?php echo $filas['primer_nombre'];?> </td>
			                        <td> <?php echo $filas['segundo_nombre'];?> </td>
			                        <td> <?php echo $filas['primer_apellido'];?> </td>
			                        <td> <?php echo $filas['segundo_apellido'];?> </td>
			                        <td> <?php echo $filas['correo_elec'];?> </td>
			                        <td> <?php echo $filas['telefono'];?> </td>
			                        <td> <?php echo $filas['numero_identidad'];?> </td>
			                        <td> <?php echo $filas['direccion'];?> </td>
			                        <td> <?php echo $filas['fecha_registro'];?> </td>
	                        	</tr>
	                     <?php
	                        }
                     	?>
                    </tbody>                  
                  </table>
              </div>
               	<h2 class="icon-users"> Usuarios</h2>
                <div class="tbla1">
                  	<table cellpadding="10">
                    	<thead>
                    	  <tr>
                    	    <th>ID_usuarios</th>
                    	    <th>Nombre Usuario</th>
                    	    <th>Contraseña</th>
                    	    <th>Correo Electrónico</th>
                    	    <th>ID Tipo Usuario</th>
                    	    <th>ID Estado</th> 
                    	    <th>Dirección Imagen</th>
                    	    <th>Fecha Registro</th>              
                    	  </tr>
                    	</thead>
                    	<tbody>
                      	<?php
                        while ($f = $resultado2 -> fetch_array(MYSQLI_BOTH))
							{
						?>
	                          	<tr>
	                            	<td> <?php echo $f['id_usuario'];?> </td>
	                            	<td> <?php echo $f['nombre_usuario'];?> </td>
	                            	<td> <?php echo $f['contras'];?> </td>
	                        	    <td> <?php echo $f['correo_electronico'];?> </td>
	                	            <td> <?php echo $f['id_tipo_usuario'];?> </td>
	        	                    <td> <?php echo $f['id_estado'];?> </td>
	        	                    <td> <?php echo $f['dir_imagen'];?> </td>
	        	                    <td> <?php echo $f['fecha_registro'];?> </td>
	                          	</tr>
	                    <?php
	                        }
                        ?>
                 	   </tbody>
                    </table>
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