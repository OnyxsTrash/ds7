<?php
// Primera cookie que expira al final de la sesión.
$ok1 = setcookie('nombre', hash("SHA256", "Jorge"));
// Segunda cookie que expira en 30 días.
$ok2 = setcookie('apellido', 'Avila', time() + (30 * 24 * 3600));
// Resultado.
if ($ok1 and $ok2) {
    $mensaje = 'Cookies almacenadas (al menos, en principio)';
} else {
    $mensaje  =  'Una  de  las  cookies  no  ha  podido  ser  guardada';
}
//Desarrollo de Software VII - Robin Avila
//p17_cookies01.php - Gestión Básica de Cookies - Creación
print("<H1>Cookies 01: Creación de Cookies</H1>\n");
require('../_lib/author.php');
?>

<!DOCTYPE>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Página 1 Guardar Cookies</title>
</head>

<body>
    <div>
        <?php echo $mensaje; ?> 
        <br />
        <!-- vínculo hacia la página 2 -->
        <a href="p17_cookies02.php">Página 2 Leer Cookies</a>
    </div>
</body>

</html>