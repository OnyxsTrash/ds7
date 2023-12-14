<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo IF-ELSE</title>
</head>
<body>
    <?php
        print("<h1>Estructura de control Selectiva IF combinado con HTML</h1>\n");
        require("../_lib/author.php");

        $nombre= "Juan";
        // $nombre= "";

        if ( $nombre != "" ) {
            echo "Hola ".$nombre ;
        } else {
            ?>
            <p>Este párrafo se imprime fuera del codigo php en la parte else, ya que la variable $nombre está vacía</p>
            
            <?php
            echo " Esta linea esta antes del cierra IF-ELSE en PHP";            
        }
        ?>
</body>
</html>