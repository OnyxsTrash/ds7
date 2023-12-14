<?php
//Desarrollo de Software VII - Robin Avila
//p15_validarFiltros02.php - Limpiez o Saneamiento/Sanitazacion con Filtros
print("<H1>Filtros 02: Limpieza o Saniamiento/Sanitizacion con Filtros</H1>\n");
require('../_lib/author.php');

$texto = "<b>it’s life</b>";
echo "// texto mostrado sin precaución <br/>\n";
echo $texto, "<br/>\n";
echo "// FILTER_SANITIZE_SPECIAL_CHARS<br/>\n";
echo filter_var($texto, FILTER_SANITIZE_SPECIAL_CHARS), "<br/>\n";
echo "// FILTER_SANITIZE_STRING<br/>\n";
echo filter_var($texto, FILTER_SANITIZE_STRING) . "<br/>\n";

//no utilizar FILTER_FLAG_ENCODE_HIGH como parametro de FILTER_SANITIZE_STRING con juego de caracteres multibyte como UTF-8

$texto = "€";
echo "// texto origen<br/>\n";
echo $texto, "<br/>\n";
echo "// FILTER_SANITIZE_STRING ",
    "+ opción FILTER_FLAG_ENCODE_HIGH<br/>\n";
echo filter_var($texto, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH) . "zbr/\n";

?>