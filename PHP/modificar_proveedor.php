<?php
  require("Seguridad.php");
@  $consulta=ConsultarEmpleado($_GET['id_proveedor']);
  function ConsultarEmpleado($cod_pro)
  {
    require("Conexion.php");
    $sql = "SELECT * FROM proveedores WHERE id_proveedor = '".$cod_pro."'";
    $resultado = $mysqli -> query($sql);
    $filas = $resultado -> fetch_array(MYSQLI_BOTH);
    return [
      $filas['nombre_proveedor'],
      $filas['descripcion_proveedor'],
      $filas['direccion_proveedor'],
      $filas['telefono_proveedor'],
      $filas['correo_electronico'],
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
  <script src="../JS/modificar_proveedor.js"></script>
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
          <h1>Modificar Proveedor</h1>
            <form action="funciones.php" method="post" onsubmit="return validarmp(this);">
              <div class="dos_columnas">
                <p>Nombre</p>
                <input type="text" name="Nombr" id="Nombr" placeholder="Nombre" value="<?php echo $consulta[0] ?>">
                <p>Descripcion del Proveedor</p>
                <input type="text" name="descprov" id="descprov" placeholder="Descripcion de proveedor" value="<?php echo $consulta[1] ?>">
              </div>
              <div class="dos_columnas">
                <p>Direccion del Proveedor</p>
                <input type="text" name="DIRpro" id="DIRpro" placeholder="Direccion del proveedor" minlength="10" value="<?php echo $consulta[2] ?>">
                <p>Telefono</p>
                <input type="text" name="Telefono" id="telefonoP" placeholder="Telefono" value="<?php echo $consulta[3] ?>">
              </div> 
              <div class="una_columna">
                <p>Correo Electronico</p>
                <input type="text" name="correo" id="correo" placeholder="Correo Electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" value="<?php echo $consulta[4] ?>">
              </div>
              <input type="submit" name="inicio" value="Guardar">
              <input type="hidden" name="codigo_pro" id="codigo_pro" value="<?php echo $_GET['id_proveedor'] ?>">
            </form>    
        </div>
		</div>
	</section>
</body>
</html>
<?php
  }
?>