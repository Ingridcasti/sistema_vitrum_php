<?php
	$host = "localhost";
	$user = "root";
	$cont = "";
	$db = "vitrumhn";
	$mysqli = new MySQLi($host,$user,$cont, $db);
	$mysqli -> set_charset("utf8");
	if ($mysqli -> connect_errno) 
	{
		die("Fallo la conexion a MySQL: (" . $mysqli -> mysql_connect_errno(). ")". $mysqli -> mysql_connect_error());
	}
?>
