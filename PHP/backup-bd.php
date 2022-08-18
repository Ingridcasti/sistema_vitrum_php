<?php
	require("Seguridad.php");
  	if (empty($_SESSION['id_usuario'])) 
	{
  		echo "<script> alert('Debe Iniciar Sesión'); window.location= 'login.php'</script>";
	}
	else
	{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>BackUp VITRUM®</title>
	<link rel="stylesheet" type="text/css" href="../CSS/backup-bd.css">
	<link rel="stylesheet" type="text/css" href="../ico_fonts.css">
</head>
<body>
	<section>
		<h1 class="neon" data-text="VITRUM®">VITRUM®</h1>
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
            	<h1>Respaldo y Restauro de Base De Datos</h1>
                <form action="./Restore.php" method="POST"  >
					<h3>Selecciona un punto de restauración</h3>
					<select name="restorePoint">
						<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
						<?php
							include_once './Connet.php';
							$ruta=BACKUP_PATH;
							if(is_dir($ruta)){
							    if($aux=opendir($ruta)){
							        while(($archivo = readdir($aux)) !== false){
							            if($archivo!="."&&$archivo!=".."){
							                $nombrearchivo=str_replace(".sql", "", $archivo);
							                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
							                $ruta_completa=$ruta.$archivo;
							                if(is_dir($ruta_completa)){
							                }else{
							                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
							                }
							            }
							        }
							        closedir($aux);
							    }
							}else{
							    echo $ruta." No es ruta válida";
							}
						?>
					</select>
					<button type="submit" name="inicio">Restaurar</button>
			  </form>
            </div>
            <div class="crear" name="crear">
				<a href="./Backup.php">Crear copia de seguridad</a>
			</div>
		</div>
	</section>
</body>
</html>
<?php
	}
?>