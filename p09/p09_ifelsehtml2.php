<?php
    $nombre = rand(0,1) ? 'Juan' : null;
    $edad   = rand(0,1) ? rand(7,77) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo If-Else con HTML</title>
</head>
<body>
    <?php
        print("<h1>Estructura de control Selectiva IF combinado con HTML</h1>\n");
        require("../_lib/author.php");
    ?>
        <?php if ( $nombre == null ) : ?>
            !Hola desconocido! <br />
        <?php elseif ( $edad == null ) : ?>
            Conozco su <span class="ok"> nombre </span>
            pero no su <span class="ko"> edad </span>.<br />
        <?php else : ?>
            Conozco su <span class="ok"> nombre </span>
            y  su <span class="ko"> edad </span>.<br />
            Pero no dire nada!
        <?php endif;
    ?>
</body>
</html>