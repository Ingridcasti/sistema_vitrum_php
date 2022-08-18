<?php
  require("Seguridad.php");
@  $consulta=Consultarproducto($_GET['codigo_productos']);
  function Consultarproducto($cod_pro)
  {
    require("Conexion.php");
    $sql = "SELECT * FROM productos WHERE codigo_productos = '".$cod_pro."'";
    $resultado = $mysqli -> query($sql);
    $filas = $resultado -> fetch_array(MYSQLI_BOTH);
    return [
      $filas['nombre_producto'],
      $filas['precio_producto'],
      $filas['descripcion_producto'],
    ];
  }
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
	<title>Login VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/modificar_proveedor.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
  <script src="../JS/modificar_producto.js"></script>
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
          <h1>Modificar Producto</h1>
            <form action="funciones_producto.php" method="post" onsubmit="return validarmprod(this);">
              <div class="dos_columnas">
                <p>Nombre</p>
                <input type="text" name="nom_pro" id="nom_pro" placeholder="Nombre" value="<?php echo $consulta[0] ?>">
                <p>Precio</p>
                <input type="text" name="pre_pro" id="pre_pro" placeholder="Precio DeL Producto" value="<?php echo $consulta[1] ?>">
              </div>
              <div class="una_columna">
                <p>Descripción Del Producto</p>
                <input type="text" name="des_prod" id="des_prod" placeholder="Descripción Del Producto" value="<?php echo $consulta[2] ?>">
              </div>
              <input type="submit" name="inicio" value="Guardar">
              <input type="hidden" name="codigo_productos" id="codigo_productos" value="<?php echo $_GET['codigo_productos'] ?>">
            </form>    
        </div>
		</div>
	</section>
</body>
</html>
<?php
  }
?>