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
	<link rel="stylesheet" type="text/css" href="../CSS/nuevo_producto.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
  <script src="../JS/nuevo_producto.js"></script>
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
          <h1>Nuevo Producto</h1>
            <form action="funciones_producto.php" method="post" enctype="multipart/form-data" onsubmit="return validarnprod(this);">
              <div class="dos_columnas">
                <P>Código del Producto</P>
                <input type="text" name="cod_pro" id="cod_pro" value="<?php
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;

}
echo generarCodigo(5);
?>" readonly>
                <P>Nombre Del Producto</P>
                <input type="text" name="nombre_pro" id="nombre_pro" placeholder="Ingrese Nombre Producto" required>
              </div>
              <div class="dos_columnas">
                <P>Descripción De Producto</P>
                <input type="text" name="descrip_pro" id="descrip_pro" placeholder="Ingrese la Descripción" required>
                <p>Precio Producto</p>
                <input type="text" name="precio_pro" id="precio_pro" placeholder="Ingrese el Precio">
              </div>
              <div class="una_columnas">
                <p>Seleccione La Imagen Del Producto</p>
                <input type="file" name="imagen" required>
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