<?php
    require("Conexion.php");
    require("Seguridad.php");
    $sql="SELECT * FROM materiales";
    $resultado=$mysqli -> query($sql);
@   $producto=$_POST['producto'];
@   $tipo=$_POST['tipoo'];  

if ($producto != 'ventana') {
    $producto='Puerta';  
}
// ALUMINIO

$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP01'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP01_b = $f['precio_blanco_negro'];
  $P_VCP01_e = $f['precio_estandar'];
  $P_VCP01_m = $f['precio_madera'];
}   
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP02'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP02_b = $f['precio_blanco_negro'];
  $P_VCP02_e = $f['precio_estandar'];
  $P_VCP02_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP03'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP03_b = $f['precio_blanco_negro'];
  $P_VCP03_e = $f['precio_estandar'];
  $P_VCP03_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP04'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP04_b = $f['precio_blanco_negro'];
  $P_VCP04_e = $f['precio_estandar'];
  $P_VCP04_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP05'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP05_b = $f['precio_blanco_negro'];
  $P_VCP05_e = $f['precio_estandar'];
  $P_VCP05_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP06'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP06_b = $f['precio_blanco_negro'];
  $P_VCP06_e = $f['precio_estandar'];
  $P_VCP06_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP07'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP07_b = $f['precio_blanco_negro'];
  $P_VCP07_e = $f['precio_estandar'];
  $P_VCP07_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP08'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP08_b = $f['precio_blanco_negro'];
  $P_VCP08_e = $f['precio_estandar'];
  $P_VCP08_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP09'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP09_b = $f['precio_blanco_negro'];
  $P_VCP09_e = $f['precio_estandar'];
  $P_VCP09_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP10'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP10_b = $f['precio_blanco_negro'];
  $P_VCP10_e = $f['precio_estandar'];
  $P_VCP10_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP11'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP11_b = $f['precio_blanco_negro'];
  $P_VCP11_e = $f['precio_estandar'];
  $P_VCP11_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VCP12'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VCP12_b = $f['precio_blanco_negro'];
  $P_VCP12_e = $f['precio_estandar'];
  $P_VCP12_m = $f['precio_madera'];
} 
// ALUMINIO ECONOMICA
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE01'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE01_b = $f['precio_blanco_negro'];
  $P_VAE01_e = $f['precio_estandar'];
  $P_VAE01_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE02'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE02_b = $f['precio_blanco_negro'];
  $P_VAE02_e = $f['precio_estandar'];
  $P_VAE02_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE03'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE03_b = $f['precio_blanco_negro'];
  $P_VAE03_e = $f['precio_estandar'];
  $P_VAE03_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE04'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE04_b = $f['precio_blanco_negro'];
  $P_VAE04_e = $f['precio_estandar'];
  $P_VAE04_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE05'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE05_b = $f['precio_blanco_negro'];
  $P_VAE05_e = $f['precio_estandar'];
  $P_VAE05_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE06'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE06_b = $f['precio_blanco_negro'];
  $P_VAE06_e = $f['precio_estandar'];
  $P_VAE06_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE07'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE07_b = $f['precio_blanco_negro'];
  $P_VAE07_e = $f['precio_estandar'];
  $P_VAE07_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE08'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE08_b = $f['precio_blanco_negro'];
  $P_VAE08_e = $f['precio_estandar'];
  $P_VAE08_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE09'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE09_b = $f['precio_blanco_negro'];
  $P_VAE09_e = $f['precio_estandar'];
  $P_VAE09_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE10'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE10_b = $f['precio_blanco_negro'];
  $P_VAE10_e = $f['precio_estandar'];
  $P_VAE10_m = $f['precio_madera'];
} 
$sql = mysqli_query($mysqli, "SELECT * FROM materiales WHERE codigo_material = 'VAE11'");
if ($f=mysqli_fetch_assoc($sql)) 
{
  $P_VAE11_b = $f['precio_blanco_negro'];
  $P_VAE11_e = $f['precio_estandar'];
  $P_VAE11_m = $f['precio_madera'];
} 

echo $producto; echo " $tipo<br>";

echo "<br>";
@   $nombre=$_POST['nombre_c']; 
@   $apellido=$_POST['apellido_c']; 
@   $direccion=$_POST['direccion'];
@   $dir=$_POST['instalacion'];
@   $telefono=$_POST['telefono_c'];
@   $cod_pro=$_POST['cod_prod'];
@   $alto=$_POST['Alto'];
@   $ancho=$_POST['Ancho'];
@   $cantidad=$_POST['Cantidad'];







if ($producto == "ventana" && $tipo== "Aluminio") {

     //pesada 

function aluminio_pesada_blanco_negro(){
@ $alto=$_POST['Alto'];
@ $ancho=$_POST['Ancho'];
@ $cantidad=$_POST['Cantidad'];
@   $nombre=$_POST['nombre_c']; 
@   $apellido=$_POST['apellido_c']; 
@   $direccion=$_POST['direccion'];
@   $cod_pro=$_POST['cod_prod'];
@   $dir=$_POST['instalacion'];
@   $telefono=$_POST['telefono_c'];
require("Conexion.php");



 global $P_VCP01_b; 
 global $P_VCP02_b;  global $P_VCP03_b; global $P_VCP04_b; global $P_VCP05_b; global $P_VCP06_b; global $P_VCP07_b;
  global $P_VCP08_b; global $P_VCP09_b; global $P_VCP10_b; global $P_VCP11_b; global $P_VCP12_b; global $P_VVC17_b; global $P_VVC18_b; global $P_VVC19_b; global $P_VVC21_b;

$error=1.10;  
$cabezal_contra_marco= ($ancho*$error/6)*$P_VCP01_b;
$umbral_contra_marco= ($ancho*$error/6)*$P_VCP02_b;
$jamba_contra_marco=($alto*$error/6)*$P_VCP03_b;
$umbral_hoja=(($ancho+$ancho)*$error/6)*$P_VCP04_b;
$jamba_chapa=($alto*$error/6)*$P_VCP05_b;
$jamba_traslape=($alto*$error/6)*$P_VCP06_b;
$vidrio=((($alto+$ancho)*2)*$error/7.06)*$P_VVC17_b;
$vinil=(($alto*$ancho)*2)*$P_VVC18_b;
$silicone=(2*1.5)*$P_VCP07_b;
$llavines=(2)*$P_VCP08_b;
$guias=(2*4)*$P_VCP12_b;
$felpa=(($alto+$alto)+($ancho+$ancho))*$P_VVC19_b;
$rodos=((2)*4)*$P_VCP09_b;
$moldura_para_maya=($ancho+$alto)*$P_VCP10_b;
$tela=((($ancho+($alto*2))*39.38/12))*$P_VVC21_b;
$rodo_para_maya=(2*4)*$P_VCP11_b;
//prueba
$subtotal=($cabezal_contra_marco+$umbral_contra_marco+$jamba_contra_marco+$umbral_hoja+$jamba_chapa+$jamba_traslape+$vidrio+$vinil+$silicone+$llavines+$guias+$felpa+$rodos+$moldura_para_maya+$tela+$rodo_para_maya);

$total=($subtotal*$cantidad);

  if (empty($total))
    {
      echo "el total esta vacio";
    }
    else
    { 
      function generarCodigo($longitud) 
      {
       $key = '';
       $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $max = strlen($pattern)-1;
       for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
       return $key;
        }
        $codigop=generarCodigo(5);
      $codi = substr($cod_pro, 0, 5);
     $sql1=mysqli_query($mysqli, "INSERT INTO pedidos(codigo_pedido, direccion_instalacion, cantidad_pedido, codigo_producto, id_empleado, total) VALUES ('$codigop', '$dir', '$cantidad', '$codi','$_SESSION[id_usuario]', $total)");
     $var = '1';
      if ($var='1') 
      {
         $sql=mysqli_query($mysqli, "INSERT INTO clientes(nombre_cliente, apellido_cliente, telefono_cliente, direccion_instalacion, id_empleado_registro, codigo_pedido, total) VALUES ('$nombre', '$apellido', '$telefono', '$dir', '$_SESSION[id_usuario]', '$codigop', '$total')");
         echo "<script> alert('Pedido creado con éxito'); window.location= 'nuevo_pedido.php'</script>";      
       }
      else
      {
        echo "No se encontro producto";
      }




    }
  }
echo "<br>".aluminio_pesada_blanco_negro();

}
























 elseif ($producto == "Puerta" && $tipo== "Aluminio") 
 {
    function puerta_aluminio_pesada_blanco_negro(){
      @   $nombre=$_POST['nombre_c']; 
@   $apellido=$_POST['apellido_c']; 
@   $direccion=$_POST['direccion'];
@   $cod_pro=$_POST['cod_prod'];
@   $dir=$_POST['instalacion'];
@   $telefono=$_POST['telefono_c'];
@ $alto=$_POST['Alto'];
@ $ancho=$_POST['Ancho'];
@ $cantidad=$_POST['Cantidad'];
require("Conexion.php");

 global $P_VCP01_b; 
 global $P_VCP02_b;  global $P_VCP03_b; global $P_VCP04_b; global $P_VCP05_b; global $P_VCP06_b; global $P_VCP07_b;
  global $P_VCP08_b; global $P_VCP09_b; global $P_VCP10_b; global $P_VCP11_b; global $P_VCP12_b; global $P_VVC17_b; global $P_VVC18_b; global $P_VVC19_b; global $P_VVC21_b;

$error=1.10;  
$cabezal_contra_marco= ($ancho*$error/6)*$P_VCP01_b;
$umbral_contra_marco= ($ancho*$error/6)*$P_VCP02_b;
$jamba_contra_marco=($alto*$error/6)*$P_VCP03_b;
$umbral_hoja=(($ancho+$ancho)*$error/6)*$P_VCP04_b;
$jamba_chapa=($alto*$error/6)*$P_VCP05_b;
$jamba_traslape=($alto*$error/6)*$P_VCP06_b;
$vidrio=((($alto+$ancho)*2)*$error/7.06)*$P_VVC17_b;
$vinil=(($alto*$ancho)*2)*$P_VVC18_b;
$silicone=(2*1.5)*$P_VCP07_b;
$llavines=(2)*$P_VCP08_b;
$guias=(2*4)*$P_VCP12_b;
$felpa=(($alto+$alto)+($ancho+$ancho))*$P_VVC19_b;
$rodos=((2)*4)*$P_VCP09_b;
$moldura_para_maya=($ancho+$alto)*$P_VCP10_b;
$tela=((($ancho+($alto*2))*39.38/12))*$P_VVC21_b;
$rodo_para_maya=(2*4)*$P_VCP11_b;
//prueba
$subtotal=($cabezal_contra_marco+$umbral_contra_marco+$jamba_contra_marco+$umbral_hoja+$jamba_chapa+$jamba_traslape+$vidrio+$vinil+$silicone+$llavines+$guias+$felpa+$rodos+$moldura_para_maya+$tela+$rodo_para_maya);

$total=($subtotal*$cantidad);
    if (empty($total))
    {
      echo "el total esta vacio";
    }
    else
    {
      function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;

}
      $codigop=generarCodigo(5);
      $codi = substr($cod_pro, 0, 5);
     $sql1=mysqli_query($mysqli, "INSERT INTO pedidos(codigo_pedido, direccion_instalacion, cantidad_pedido, codigo_producto, id_empleado) VALUES ('$codigop', '$dir', '$cantidad', '$codi','$_SESSION[id_usuario]')");
     $var = '1';
      if ($var='1') 
      {
         $sql=mysqli_query($mysqli, "INSERT INTO clientes(nombre_cliente, apellido_cliente, telefono_cliente, direccion_instalacion, id_empleado_registro, codigo_pedido, total) VALUES ('$nombre', '$apellido', '$telefono', '$dir', '$_SESSION[id_usuario]', '$codigop', '$total')");
         echo "<script> alert('Pedido creado con éxito'); window.location= 'nuevo_pedido.php'</script>";      
       }
      else
      {
        echo "No se encontro producto";
      }
    }
  }
  echo "<br>".puerta_aluminio_pesada_blanco_negro();
}

?>
