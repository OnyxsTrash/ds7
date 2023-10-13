<?php
    print("<h1>Variables Dinámicas Referenciadas a partir de contenido de otras variables para la localización</h1>\n");
    require('../_lib/author.php');

    $message_es= "Hola";
    $message_en= "Hello";

    $language = "en";
    $message  = "message_".$language;
    print $$message . "<br />";

    $language = "es";
    $message =  "message_" .$language;
    print $$message . "<br />";
?>