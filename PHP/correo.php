<?php
// El mensaje
$mensaje = "Esto es una prueba 1\r\nA ver si te llega correctamente 2\r\nUn saludo 3\r\n\n\n\nwww.ejemplocodigo.com";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviamos el email
mail('alevasquez841@gmail.com', 'Probando la funcion MAIL desde PHP', $mensaje);


echo "EMAIL ENVIADO...";

?>