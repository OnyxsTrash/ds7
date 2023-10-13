<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y HTML</title>
</head>
<body>
    <?PHP
    print("<h1>Combinación de PHP y HTML</h1>\n");
    require('../_lib/author.php');    
    ?>

    <p>Este es el párrafo 1, escrito en HTML</p>

    <?php
        print("<p>Este es el párrafo 2, generado desde PHP</p>\n");        
    ?>
    <p>Este es el párrafo 3, escrito en HTML</p>

    <?php
        print("<p>Este es el párrafo 4, generado desde PHP</p>\n");        
    ?>

    
</body>
</html>