<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página 2 Leer Cookies</title>
</head>

<body>
    <div>
        <?php
        //Desarrollo de Software VII - Robin Avila
        //p17_cookies02.php - Gestión Básica de Cookies - Recuperación
        print("<H1>Cookies 02: Recuperación de Cookies</H1>\n");
        require('../_lib/author.php');

        if (isset($_COOKIE["nombre"])) {
            echo "\$_COOKIE[\"nombre\"] = {$_COOKIE['nombre']} <BR/>";
        } else {
            echo  "\$_COOKIE[\"nombre\"]  =  <BR/>"; 
        }
        if (isset($_COOKIE["apellido"])) {
            echo "\$_COOKIE[\"apellido\"] = {$_COOKIE['apellido']} <BR/>";
        } else {
            echo  "\$_COOKIE[\"apellido\"]  =  <BR/>"; 
        }
        ?>
    </div>
</body>

</html>