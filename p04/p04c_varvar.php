<?php
    print("<h1>Variables Dinámicas Referenciadas a partir del contenido de otras variables</h1>\n");
    require('../_lib/author.php');

    $a = "Hola";
    $$a = "Mundo";

    print "$a $Hola\n <br />";
    print "$a ${a}";
?>