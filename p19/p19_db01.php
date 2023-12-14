<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Consulta a la BD _prueba</title>
</head>

<body>
    <?php
    //Desarrollo de Software VII - Robin Avila
    //p19_db01.php - Base de Datos 01: Conexión, Consultas y Desconexión

    echo "<h1>Base de Datos 01: Conexión, Consultas y Desconexión</h1>\n";
    require('../_lib/author.php');
    echo "<br/>";

    $conexionBD = mysqli_connect("127.0.0.1", "bancoadmin", "bancoadmin", "_prueba");

    if ($conexionBD) {
        mysqli_set_charset($conexionBD, "utf8");
        echo 'Conexión realizada.<br />';
        echo 'Información del servidor: ' . mysqli_get_host_info($conexionBD) . '<br />';

        $resultado = mysqli_query($conexionBD, 'SELECT * FROM Persona');

        if ($resultado === false) {
            echo "Error en la ejecución de la consulta.<br />";
        } else {
            echo 'Número registros en la Tabla Persona: ' . mysqli_num_rows($resultado) . '<br />';
        }

        $resultado = mysqli_query($conexionBD, 'SELECT Nombre, Apellidos FROM Persona');

        if ($resultado === false) {
            echo "Error en la ejecución de la consulta.<br />";
        } else {
            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo "Apellidos:" . $registro['Apellidos'] . ". Nombre:" . $registro['Nombre'] . "<br />";
            }
        }

        if (mysqli_close($conexionBD)) {
            echo 'Desconexión realizada.<br />';
        } else {
            echo 'Error en la desconexión.';
        }
    } else {
        printf('Error %d : %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
    }
    ?>
</body>

</html>
