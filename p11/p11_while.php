<?php
print("<h1>Estructura de repetición While</h1>\n");
require("../_lib/author.php");
    print("<ul>\n");
    $i = 1;
    while ($i < 5) {
        print("<li>Elemento $i</li>\n");
        $i++;
    }
    print("</ul>\n");
?>