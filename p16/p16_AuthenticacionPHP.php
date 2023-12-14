<?php
//Desarrollo de Software VII - Robin Avila
//p16_AutenticacionPHP.php - Autenticación mediante formulario
print("<H1>Autententicación: Formulario de Autenticación</H1>\n");
require('../_lib/author.php');

// Función que comprueba que la identificación introducida es correcta.
function usuario_existe($identificador, $contrasenia) 
{
    // Aleatorio, esperando completar...
    return (bool) rand(0, 1);
}

// Definición de las variables.
$identificador = '';
$contrasenia = '';
$mensaje = '';
//Procesamiento del formulario.

if (isset($_POST['btniniciar'])) {
    // Recuperar los datos introducidos.
    $identificador = $_POST['identificador'];
    $contrasenia = $_POST['contrasenia'];
    // Comprobar que el usuario existe.
    if (usuario_existe($identificador, $contrasenia)) {
        // El usuario existe...
        // Salir a otra página e interrumpir el script.
        header('location: p16_ainicio.php');
        exit;
    } else {
        // El usuario no existe...
        // Mostrar un mensaje y ofrecer de nuevo la identificación
        $mensaje = 'Identificación incorrecta. ';
        $mensaje .= 'Inténtelo de nuevo.';
        // Dejar que se muestre el formulario de nuevo...
    }
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Peralta B.">
    <meta name="description" content="Autenticación PHP">
    <title>miSitio.com</title>
    <link href="./css/login_estilo.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="login">
        <h1>Autenticación PHP</h1>
        <form action="p16_AutenticacionPHP.php" method="post">
            <input type="text" name="identificador" placeholder="Usuario" value="<?php echo $identificador; ?>" 
            required="required" />
            <input type="password" name="contrasenia" placeholder="Contraseña" value="<?php echo $contrasenia; ?>" 
            required="required" />
            <button type="submit" name="btniniciar" class="btn btn-primary btn-block btn- large">Iniciar Sesión</button>
            <div id="mensaje">
                <?php echo $mensaje; ?>
            </div>
        </form>
    </div>
</body>
</html>