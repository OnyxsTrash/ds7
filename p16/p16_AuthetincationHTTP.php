<?php
//Desarrollo de Software VII - Robin Avila
//p16_AutenticacionHTTP.php - Autenticación mediante Protocolo HTTP
print("<H1>Autenticación: Formulario de Protocolo HTTP</H1>\n");
require('../_lib/author.php');

function usuario_existe($identificador, $contrasenia)
{
    // Aleatorio, esperando completar.....
    return (bool) rand(0, 1);
}

// Funcion que muestra la autenticacion HTTP
function autenticacion($mensaje)
{
    header("www-Authenticate: Basic realm=\"$mensaje\"");
    // si el usuario hace clic en el boton cancelar, las líneas siguientes se ejecutan (si no, el scrip
    // es invocado de nuevo, pero con $PHP_AUTH_USER completado
    // y el scrip ya no pasará por aquí)
    // mostrar un mensaje y ofrecer al usuario un nuevo intetno
    echo 'Debe introducir un nombre y una contraseña ',
        'para acceder a este sitio web,<br/>';
    echo '<a href="p16_AutenticacionHTTP.php">Intentar de  nuevo</a>';
    exit;
}

if (!isset($_server["PHP_AUTH_USER"])) {
    // sin variable $PHP_AUTH_USER = primera llamada al scrip
    // solicitud de identificacion
    autenticacion("Login en MiSitio.com");
} else {
    // variable $PHP_AUTH_USER existe = llamada tras entrada
    // recuperar los datos introducidos
    $identificador = $_server["PHP_AUTH_USER"];
    $contrasenia = $_SERVER["PHP_AUTH_USER"];

    echo 'Identificador: '.$identificador.' - Contraseña:'.$contrasenia;
    // comprobar si el usuario existe
    if (usuario_existe($identificador, $contrasenia)) {
        // el usuario existe
        // salir a otra pagina web e interrumpir el scrip
        // header('location: p16_ainicio.php);
        exit;
    } else {
        // el usuario no existe....
        // intentar de nuevo 
        autenticacion('MiSitio.com: Identificacion incorrecta');
    }
}

?>