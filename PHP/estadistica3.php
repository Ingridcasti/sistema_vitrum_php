<?php
require_once("conexion.php");
require("Seguridad.php");
if (empty($_SESSION['id_usuario'])) 
        {
            echo "<script> alert('Debe Iniciar Sesión'); window.location= 'login.php'</script>";
        }
        else
        {
?>
<!DOCTYPE HTML>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="../CSS/boton_estadistica.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="../JS/Dona.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: '<strong>Pedidos de Productos</strong>'
        },
        subtitle: {
            text: '<strong>VITRUMHN®</strong>'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Pedidos',
            data: [

                        <?php
                        $sql = "SELECT SUM(cantidad_pedido), codigo_producto FROM pedidos GROUP BY codigo_producto";
                        $res = mysqli_query($mysqli, $sql);
                        while($data = mysqli_fetch_array($res)){
                        ?>
                        ['<?php echo $data['codigo_producto'] ?>', <?php echo $data['SUM(cantidad_pedido)'] ?>],

                        <?php
                        }
                        ?>
            ]
        }]
    });
});
		</script>
	</head>
	<body>
    <script src="Highcharts-4.1.5/js/highcharts.js"></script>
    <script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
    <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
    <div id="container" style="height: 400px"></div>

    <br><br>
    <center><a href="estadistica4.php"> Ver Siguiente </a></center>
    <br>
    <center><a href="mdi_vitrumhn.php"> Salir </a></center>
	</body>
</html>
<?php
    }
?>