<?php
    echo '<!html lang="es>';
    echo '<head>';
    echo '<title>PHP y HTML</title>';
    echo '<meta charset="utf-8">';
    echo '<link rel="stylsheet" type="text/css" href="../css/styles.css" />';
    echo '</head>';
    echo '<body>';
    
    print("<h1>Generando HTML desde PHP en la Salida</h1>\n");
    require("../_lib/author.php");
    
    echo '<p>Este es el Parrafo 1, escrito desde PHP</p>',"\n";
    print("<p>Este es el Parrafo 2, escrito desde PHP</p>\n");
    echo '<p>Este es el parrado 3, escrito nuevamente desde PHP</p>',"\n";
    print("<p>Este es el parrafo 4, escrito desde PHP</p>\n");
    
    echo '</body>';
    echo '</html>';
?>