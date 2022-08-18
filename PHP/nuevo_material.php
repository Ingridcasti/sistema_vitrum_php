<?php
  require("Seguridad.php");
  require("Conexion.php");
  $sql = "SELECT * FROM productos";
  $resultado = $mysqli -> query($sql);
  if (empty($_SESSION['id_usuario'])) 
  {
      echo "<script> alert('Debe Iniciar Sesión'); window.location= 'login.php'</script>";
  }
  else
  {
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../JS/nuevo_material.js"></script>

<script type="text/javascript"> 
    $(function()
    {
      $(document).on('change', '#mySelect',function(){
        var value = $(this).val();
        $('#myInput').val(value);
      });
    });
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Login VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nuevo_material.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
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
          <h1>Nuevo Material</h1>
            <form action="funciones_materiales.php" method="post" onsubmit="return validarnm(this);">
              <div class="dos_columnas">
                <P>Codigo Material</P>
                <input type="text" name="cod_ma" id="cod_ma" placeholder="Ingrese Codigo del Material" value="<?php
                  function generarCodigo($longitud) {
                   $key = '';
                   $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                   $max = strlen($pattern)-1;
                   for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
                   return $key;
                  }
                  echo generarCodigo(5);
                  ?>" readonly>
                <p>Descripcion del Material</p>
                <input type="text" name="desc_ma" id="desc_ma" placeholder="Ingrese Descripcion del Material" minlength=10 required>
              </div>
              <div class="dos_columnas">
                <P>Tipo del Material</P>
                <input type="text" name="tipo_ma" id="tipo_ma" placeholder="Ingrese Tipo de Material" required>
                <p>Precio Blanco y Negro</p>
                <input type="text" name="p_b_n" id="p_b_n" placeholder="Ingrese Precio Blanco y Negro" required="">
              </div>
              <div class="dos_columnas">
                <P>Precio Madera</P>
                <input type="text" name="p_ma" id="p_ma" placeholder="Ingrese Precio Madera" required>
                <p>Precio Estandar</p>
                <input type="text" name="p_es" id="p_es" placeholder="Ingrese Precio Estandar" required>
              </div>
              <div class="una_columna">
                <p>Seleccione el Producto</p>
                    <select name="producto" id="mySelect" required="">
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
              <input type="hidden" name="cod_producto" id="myInput">
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