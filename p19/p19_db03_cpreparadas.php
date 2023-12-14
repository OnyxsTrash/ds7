<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Consultas Preparadas/Parametrizada BD _prueba</title>
</head>

<body>
    <?php
    //Desarrollo de Software VII - Robin Avila
    //p19_db01.php - Base de Datos 03: Consultas Parametrizadas/Preparadas


    echo "<h1>Base de Datos 03: Consultas Parametrizadas/Preparadas</h1>\n";
    require('../_lib/author.php');
    echo "<br/>";

    // Conexión a la base de datos
    $conexionBD = mysqli_connect("127.0.0.1", "bancoadmin", "bancoadmin", "_prueba");

    if ($conexionBD) {
        // Establecer el conjunto de caracteres de la conexión
        mysqli_set_charset($conexionBD, "utf8");

        echo 'Conexión realizada.<br />';
        echo 'Información del servidor:' . mysqli_get_host_info($conexionBD) . '<br />';

        $sql = "SELECT Nombre, Apellidos FROM Persona WHERE Edad > ?";
        // Preparación de la consulta
        $resultado = mysqli_prepare($conexionBD, $sql);

        // Enlace de argumentos.
        $ok = mysqli_stmt_bind_param($resultado, 'i', $Edad);
        $Edad = 20; // Mientras no ejecute la consulta, puede inicializar la variable

        // Ejecución de la consulta.
        $ok = mysqli_stmt_execute($resultado);

        if ($ok == false) {
            echo "Error en la ejecución de la consulta.<br />";
        } else {
            // Asociación de variables de resultado.
            $ok = mysqli_stmt_bind_result($resultado, $Apellido, $Nombre);
            // Lectura de valores.
            echo "Apellidos y nombre de personas que tengan una edad > 20<br />";
            while (mysqli_stmt_fetch($resultado)) {
                echo $Apellido . ", " . $Nombre . "<br />";
            }
            mysqli_stmt_close($resultado);
        }

        // Desconexión de la base de datos
        if (mysqli_close($conexionBD)) {
            echo 'Desconexión realizada.<br />';
        } else {
            echo 'Error en la desconexión.';
        }
    } else {
        // Manejar errores de conexión
        printf('Error %d : %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
    }
    ?>
</body>

</html>
