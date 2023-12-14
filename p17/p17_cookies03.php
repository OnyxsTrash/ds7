<?php
//Desarrollo de Software VII - Robin Avila
//p17_cookies03.php
// Comprobar si es la segunda invocación de la página.
if (!isset($_GET['intento'])) {
    // No...
    // Almacenar la cookie.
    setcookie('prueba', 'valorAlmacenado');
    // Y recargar la página con información en la URL
    // indicando que es la segunda vez que se visita.
    header('Location: p17_cookies03.php?intento=1');
} else {
    // Sí...
    // Probar si la cookie ha "vuelto".
    //p17_cookies03.php - Gestión Básica de Cookies - Verificación de Almacenamiento
    print("<H1>Cookies 03: Verificación Almacenamiento de Cookies</H1>\n");
    require('../_lib/author.php');


    if (isset($_COOKIE['prueba'])) { // sí ...
        echo 'Cookie Aceptada';
        echo "\$_COOKIE[\"prueba\"] = {$_COOKIE['prueba']} <BR/>";
    } else { // no...
        echo 'Cookie Rechazada';
    }
}
?>