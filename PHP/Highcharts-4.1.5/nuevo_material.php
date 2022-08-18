<?php
  require("Conexion.php");
  $sql = "SELECT * FROM productos";
  $resultado = $mysqli -> query($sql);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script> 
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
            <form action="funciones_materiales.php" method="post">
              <div class="dos_columnas">
                <P>Codigo Material</P>
                <input type="text" name="cod_ma" id="cod_ma" placeholder="Ingrese Codigo del Material" required>
                <p>Descripcion del Material</p>
                <input type="text" name="desc_ma" id="desc_ma" placeholder="Ingrese Descripcion del Material">
              </div>
              <div class="dos_columnas">
                <P>Tipo del Material</P>
                <input type="text" name="tipo_ma" id="tipo_ma" placeholder="Ingrese Tipo de Material" required>
                <p>Precio Blanco y Negro</p>
                <input type="text" name="p_b_n" id="p_b_n" placeholder="Ingrese Precio Blanco y Negro">
              </div>
              <div class="dos_columnas">
                <P>Precio Madera</P>
                <input type="text" name="p_ma" id="p_ma" placeholder="Ingrese Precio Madera" required>
                <p>Precio Estandar</p>
                <input type="text" name="p_es" id="p_es" placeholder="Ingrese Precio Estandar">
              </div>
              <div class="una_columna">
                <p>Seleccione el Producto</p>
                    <select name="producto" id="mySelect">
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