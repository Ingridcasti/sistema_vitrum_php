<?php
  require("Seguridad.php");
@  $consulta=ConsultarEmpleado($_GET['id_empleado']);
  function ConsultarEmpleado($cod_emp)
  {
    require("Conexion.php");
    $sql = "SELECT * FROM empleados WHERE id_empleado = '".$cod_emp."'";
    $resultado = $mysqli -> query($sql);
    $filas = $resultado -> fetch_array(MYSQLI_BOTH);
    return [
      $filas['correo_elec'],
      $filas['telefono'],
      $filas['direccion'],
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
  <script src="../JS/modificar_empleado.js"></script>
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
          <h1>Modificar Empleado</h1>
            <form action="funciones_empleado.php" method="post" onsubmit="return validarmemp(this);">
              <div class="dos_columnas">
                <p>Correo Electrónico</p>
                <input type="text" name="correo_emp" id="correo_emp" placeholder="Nombre" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" value="<?php echo $consulta[0] ?>">
                <p>Telefono</p>
                <input type="text" name="telefono_emp" id="telefono_emp" placeholder="Descripcion de proveedor" value="<?php echo $consulta[1] ?>">
              </div>
              <div class="una_columna">
                <p>Dirección</p>
                <input type="text" name="dir_emp" id="dir_emp" placeholder="Correo Electronico" value="<?php echo $consulta[2] ?>">
              </div>
              <input type="submit" name="inicio" value="Guardar">
              <input type="hidden" name="id_empleado" id="id_empleado" minlength="10"value="<?php echo $_GET['id_empleado'] ?>">
            </form>    
        </div>
		</div>
	</section>
</body>
</html>
<?php
  }
?>