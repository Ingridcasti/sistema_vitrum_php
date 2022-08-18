<?php
@  $consulta=ConsultarEmpleado($_GET['codigo_material']);
  function ConsultarEmpleado($cod_mat)
  {
    require("Conexion.php");
    $sql = "SELECT * FROM materiales WHERE codigo_material = '".$cod_mat."'";
    $resultado = $mysqli -> query($sql);
    $filas = $resultado -> fetch_array(MYSQLI_BOTH);
    return [
      $filas['descripcion_material'],
      $filas['precio_blanco_negro'],
      $filas['precio_madera'],
      $filas['precio_estandar'],
    ];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Login VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/modificar_material.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
  <script src="../JS/modificar_material.js"></script>
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
          <h1>Modificar Material</h1>
            <form action="funciones_materiales.php" method="post" onsubmit="return validarmm(this);">
              <div class="dos_columnas">
                <p>Descripcion del Material</p>
                <input type="text" name="des_ma" id="des_ma" placeholder="Descripcion del Material" value="<?php echo $consulta[0] ?>">
                <p>Precio Blanco y Negro</p>
                <input type="text" name="p_bn" id="p_bn" placeholder="Precio Blanco y Negro" value="<?php echo $consulta[1] ?>">
              </div>
              <div class="dos_columnas">
                <p>Precio de Madera</p>
                <input type="text" name="p_m" id="p_m" placeholder="Precio Madera" value="<?php echo $consulta[2] ?>">
                <p>Precio Estandar</p>
                <input type="text" name="p_e" id="p_e" placeholder="Precio Estandar" value="<?php echo $consulta[3] ?>">
              </div> 
              <input type="submit" name="inicio" value="Guardar">
              <input type="hidden" name="cod_mat" id="cod_mat" value="<?php echo $_GET['codigo_material']?>">
            </form>    
        </div>
		</div>
	</section>
</body>
</html>