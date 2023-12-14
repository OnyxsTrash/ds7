<?php
print("<h1>Estructura de control Switch</h1>\n");
require("../_lib/author.php");

$extension = "XML";

switch ($extension) {
    case "PDF":
        $tipo = "Documento Abobe PDF";
        break;
    case "TXT":
        $tipo = "Documento de texto";
        break;
    case "HTM":
    case "HTML":
        $tipo = "Documento HTML";
        break;
    default:
        $tipo = "Archivo " . $extension . " Desconocido";
}
print($tipo);
?>