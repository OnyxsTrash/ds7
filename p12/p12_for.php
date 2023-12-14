<?php
print("<h1>Estructura de repetición For</h1>\n");
require("../_lib/author.php");
    print("<ul>\n");
    for ($i = 1; $i <= 5; $i++) {
        print("<li>Elemento $i</li>\n");
    }
    print("</ul>\n");
?>