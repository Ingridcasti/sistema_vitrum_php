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
<head>
  <meta charset="utf-8">
	<title>VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nuevo_proveedor.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
  <script src="../JS/nuevo_proveedor.js"></script>
</head>
<body>
	<section>
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
          <h1>Nuevo Proveedor</h1>
            <form action="funciones.php" method="post" onsubmit="return validarnp(this);">
              <div class="dos_columnas">
                <P>Nombre Del Proveedor</P>
                <input type="text" name="nombre_provee" id="nombre_provee" placeholder="Ingrese Nombre Proveedor" required>
                <p>Correo Electrónico</p>
                <input type="text" name="correo_provee" id="correo_provee" placeholder="Ingrese el Correo Electrónico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
              </div>
              <div class="dos_columnas">
                <P>Telefono</P>
                <input type="text" name="telefono_provee" id="telefono_provee" placeholder="Ingrese Telefono Proveedor" required>
                <p>Dirección</p>
                <input type="text" name="dir_provee" id="dir_provee" placeholder="Ingrese la Dirección" minlength="10" required>
              </div>
              <div class="una_columna">
                <p>Descripción Del Proveedor</p>
                <input type="text" name="descri_provee" id="descri_provee" placeholder="Descripción del Proveedor">
              </div>
              <input type="submit" name="inicio" value="Guardar">
            </form>    
        </div>
		</div>
	</section>
</body>
</html>
<?php
  }
?>