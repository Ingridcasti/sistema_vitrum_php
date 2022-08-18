<?php
  require("Seguridad.php");
  require("Conexion.php");
  @  $consulta=ConsultarEmpleado($_GET['codigo_pedido']);
  function ConsultarEmpleado($cod_emp)
  {
    require("Conexion.php");
    $sql = "SELECT * FROM pedidos WHERE codigo_pedido = '".$cod_emp."'";
    $resultado = $mysqli -> query($sql);
    $filas = $resultado -> fetch_array(MYSQLI_BOTH);
    return [
      $filas['codigo_pedido'],
      $filas['direccion_instalacion'],
      $filas['cantidad_pedido'],
      $filas['total'],
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRESUPUESTO</title>
    <link rel="stylesheet" type="text/css" href="../PDF/example1/style.css">
    <link rel="stylesheet" type="text/css" href="calculos_pre.php">
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../imagenes/logo_login.png">
      </div>
      <h1>PRESUPUESTO</h1>
      <div id="company" class="clearfix">
        <div>VITRUMHN®</div>
        <div>Bulevar Fuerzas Armadas, frente a<br /> Comercial Villas del Sol, Tegucigalpa, Honduras</div>
        <div>(504) 2243-7592</div>
        <div><a href="mailto:company@example.com">yoquiero@vitrumhn.com</a></div>
      </div>
      <div id="project">
        <div><span>Código del pedido</span> <br><?php echo $consulta[0]; ?></div>
        <div><span>Dirección de Instalación</span> <br><?php echo $consulta[1]; ?></div>
        <div><span>Fecha</span><?php echo date('d-m-Y') ?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="desc">DESCRIPCIÓN</th>
            <th>PRECIO UNITARIO B Y N</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="desc">Cabezal Contra Marco con Canal</td>
            <td class="unit">592.05</td>
          </tr>
          <tr>
            <td class="desc">Umbral Contra Marco con Canal</td>
            <td class="unit">482.49</td>
          </tr>
          <tr>
            <td class="desc">Jamba Contra Marco</td>
            <td class="unit">688.45</td>
          </tr>
          <tr>
            <td class="desc">Umbral Hoja</td>
            <td class="unit">423.84</td>
          </tr>
          <tr>
            <td class="desc">Jamba Chapa</td>
            <td class="unit">543.72</td>
          </tr>
          <tr>
            <td class="desc">Jamba Traslape</td>
            <td class="unit">510.29</td>
          </tr>
          <tr>
            <td class="desc">Vidrio 3.30 x 2.14</td>
            <td class="unit">1585</td>
          </tr>
          <tr>
            <td class="desc">Vinil</td>
            <td class="unit">6.91</td>
          </tr>
          <tr>
            <td class="desc">Silicone</td>
            <td class="unit">70</td>
          </tr>
          <tr>
            <td class="desc">Llavines Puerta o Ventana</td>
            <td class="unit">55</td>
          </tr>
          <tr>
            <td class="desc">Guias</td>
            <td class="unit">3</td>
          </tr>
          <tr>
            <td class="desc">Felpa</td>
            <td class="unit">11</td>
          </tr>
          <tr>
            <td class="desc">Rodos para Ventana</td>
            <td class="unit">30</td>
          </tr>
          <tr>
            <td class="desc">Moldura p/Maya Usa</td>
            <td class="unit">752</td>
          </tr>
          <tr>
            <td class="desc">Tela</td>
            <td class="unit">11.50</td>
          </tr>
          <tr>
            <td class="desc">Rodo p/Maya de Resorte</td>
            <td class="unit">27</td>
          </tr>
          <tr>
            <td clas="total">SUBTOTAL</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td>CANTIDAD</td>
            <td class="total"><?php echo $consulta[2]; ?></td>
          </tr>
          <tr>
            <td class="grand total">TOTAL</td>
            <td class="grand total"><?php echo $consulta[3]; ?></td>
          </tr>
        </tbody>
      </table>
      <input type="button" value="Imprimir" onclick="window.print()" class="bot">
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Se aplicará un interes de 10% por retraso en pago.</div>
      </div>
    </main>
  </body>
</html>
<?php
}
?>