<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Práctica 14: Formulario04 Tratamiento Elementos Comunes de un Formulario</title>
</head>

<body>
    <?php
    // Desarrollo de Software VII - Robin Avila
    // p14_frm04.php - Tratamiento Elementos Comunes del Formulario p14_frm03.php
    print("<h1>Formulario 04: Tratamiento Elementos Comunes del Formulario p14_frm03.php</h1>\n");
    require('../_lib/author.php');
    ?>

    nombre: <?php echo $_POST["nombre"]; ?><br /> 
    contraseña: <?php echo $_POST["password"]; ?><br />
    sexo: <?php echo $_POST["sexo"]; ?><br />
    nacionalidad: <?php echo $_POST["nacionalidad"]; ?><br />

    país a visitar:
    <?php
    if (isset($_POST["pais"])) {
        foreach ($_POST["pais"] as $clave => $valor) {
            echo $valor . " ";
        }
    } else {
        echo "ningún país seleccionado.";
    }
    ?><br />

    idiomas:
    <?php
    if (isset($_POST["idioma"])) {
        foreach ($_POST["idioma"] as $clave => $valor) {
            echo $valor . " ";
        }
    } else {
        echo "ningún idioma seleccionado.";
    }
    ?><br />

    campo oculto: <?php echo $_POST["campo_oculto"]; ?><br />
    comentario: <?php echo $_POST["comentario"]; ?><br />

</body>

</html>
