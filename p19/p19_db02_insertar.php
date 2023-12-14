<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inserción/Actualización BD _prueba</title>
</head>

<body>
    <?php
    //Desarrollo de Software VII - Robin Avila
    //p19_db01.php - Base de Datos 02: Conexión, Consultas de Inserción y Actualización y Desconexión

    echo "<h1>Base de Datos 02: Conexión, Consultas de Inserción y Actualización y Desconexión</h1>\n";
    require('../_lib/author.php');
    echo "<br/>";

    // Conexión a la base de datos
    $conexionBD = mysqli_connect("127.0.0.1", "bancoadmin", "bancoadmin", "_prueba");

    if ($conexionBD) {
        // Establecer el conjunto de caracteres de la conexión
        mysqli_set_charset($conexionBD, "utf8");

        echo 'Conexión realizada.<br />';
        echo 'Información del servidor:' . mysqli_GET_host_info($conexionBD) . '<br />';

        // Consulta de inserción de registro
        $sql = "INSERT INTO Persona (Nombre, Apellidos, Edad) VALUES ('Nadia', 'González Pérez', 31)";
        $resultado = mysqli_query($conexionBD, $sql);

        if ($resultado == false) {
            echo "Error en la ejecución de la consulta.<br />";
        } else {
            echo "Persona guardada.<br />";
        }

        // Consulta de actualización de datos
        $sql = "UPDATE Persona SET Apellidos = 'HonHon Morales', Edad = 62 WHERE Nombre = 'Nanie'";
        $resultado = mysqli_query($conexionBD, $sql);

        if ($resultado == false) {
            echo "Error en la ejecución de la consulta.<br />";
        } else {
            $apellido_persona = mysqli_affected_rows($conexionBD);
            echo "Apellidos de personas modificadas:" . $apellido_persona . ".<br />";
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
