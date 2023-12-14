<?php
session_start(); // Llamada a session_start. 

// Mostrar identificación y estado de la sesión. No mostrar en producción, solamente para debug
echo 'Sesión ID: '. session_id().'<br/>';
echo 'Sesión Name: '.session_name().'<br/>';
echo 'Sesión Status: '.session_status().'<br/>'; 

//Desarrollo de Software VII - Robin Avila
//p18_sesion02.php - Gestión Básica de Sesiones - Recuperar Datos
print("<H1>Sesion 02: Recuperar Datos de Sesion</H1>\n");
require('../_lib/author.php');

// Redirección si no existe la variable de sesión 'usuario'
if (!isset($_SESSION['usuario'])) {
    header('location: p18_sesion01.php');
    exit;
}	

// Visualización.
echo '$_SESSION[\'usuario\'] = ',
isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '', 
'<br/>';

echo '$_SESSION[\'datos\'][\'nombre\'] = ',
isset($_SESSION['datos']['nombre']) ? $_SESSION['datos']['nombre'] : '', 
'<br/>';
echo '$_SESSION[\'datos\'][\'apellido\'] = ',
isset($_SESSION['datos']['apellido']) ? $_SESSION['datos']['apellido'] : '', 
'<br/>';

echo "<p> <a href=\"p18_sesion03.php\">Cerrar Sesion</a> </p>"; 
?>