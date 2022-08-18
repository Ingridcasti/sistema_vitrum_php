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
    <title>Reportes De Pedidos</title>

    <script type="text/javascript" src="../JS/pie.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    //aqui agrego el nombre que le quiero poner al grafico....
                    text: '<strong>Porcentaje de Pedidos</strong>'
                },
                subtitle: {
                text: '<strong>VITRUMHN®</strong>'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                //aqui agrego en data los parametros que contienen la tabla cliente como facil ...
                series: [{
                    type: 'pie',
                    name: 'Porcentaje de Pedidos',
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
    <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    <br><br>
    <center><a href="estadistica3.php"> Ver Siguiente </a></center>
    <br>
    <center><a href="mdi_vitrumhn.php"> Salir </a></center>
</body>
</html>
<?php
    }
?>