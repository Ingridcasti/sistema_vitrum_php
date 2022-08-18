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
		<title>Pedidos de Productos</title>

		<script type="text/javascript" src="../JS/Barras.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '<strong>Pedidos de Productos</strong>'
        },
        subtitle: {
            text: '<strong>VITRUMHN®</strong>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: 0,
                style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pedidos'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.y:1f} Pedidos</b>'
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


            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
		</script>
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
    
    <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
    <br>
    <center><a href="mdi_vitrumhn.php"> Salir </a></center>
	</body>
</html>
<?php
    }
?>