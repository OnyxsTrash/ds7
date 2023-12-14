<?php
session_start(); // Abrir/reactivar la sesión.

// Mostrar identificación y estado de la sesión. No mostrar en producción, solamente para debug
echo 'Sesión ID: '. session_id().'<br/>';
echo 'Sesión Name: '.session_name().'<br/>';
echo 'Sesión Status: '.session_status().'<br/>'; 


// Guardar dos datos en la sesión.
$_SESSION['usuario'] = 'Administrador';
$_SESSION['datos'] = array('nombre' => 'Robin', 'apellido' => 'Avila'); 

//Desarrollo de Software VII - Robin Avila
//p18_sesion01.php - Gestión Básica de Sesiones - Creación
print("<H1>Sesion 01: Creación de Sesion</H1>\n");
require('../_lib/author.php');
?>
<!DOCTYPE>
<html>
 <head>
    <meta charset="UTF-8" />
    <title>Sesiones Almacenar Datos</title>
 </head>
 <body>
    <p><a href="p18_sesion02.php">Sesiones Recuperar Datos</a></p>
 </body>
</html>
