<?php
session_start(); // Llamada a session_start. 
//Desarrollo de Software VII - Robin Avila
//p18_sesion03.php - Gestión Básica de Sesiones - Cerrar y Eliminar
print("<H1>Sesion 3: Eliminar la Sesion</H1>\n");
require('../_lib/author.php');

// Borrar Todos los datos de la Sesión
$_SESSION = array(); 

// Eliminar la cookie de sesión (si es utilizada).
// La cookie lleva el nombre de la variable que almacena el identificador de sesión.
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 1, '/'); 
}
// Destruir la sesión.
session_destroy(); 

// Redireccionar a la página de inicio
header('location: p18_sesion01.php'); 
?>