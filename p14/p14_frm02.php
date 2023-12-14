<!DOCTYPE html>
<html lang="es">
	
	
<head>
	<meta charset="UTF-8">
	<title>Práctica 14: Formulario02 Procesar GET/POST REQUEST</title>
</head>
<body>

<?php
//Desarrollo de Software VII - Robin Avila
//p14_frm02.php -	Script para procesar Formulario p14_frm01.php
print("<H1>Formulario 02: Script para Procesar Formulario p14_frm01.php</H1>\n");
require('../_lib/author.php');

if (isset($_REQUEST['edad'])) { 
	$edad = (int) $_REQUEST['edad']; 
	if ($edad > 0 && $edad < 110) {
		print("La edad es: $edad </br>");
	} else {
		print("Valor inválido </br>");
	}

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':echo "Petición de tipo GET";
		break;
		case 'POST':echo "Petición de tipo POST";
		break;
	}
} else {
	print("No se ha definido edad");
}
?>
</body>
</html>
