<?php
print("<h1>Vector y matriz multidimencional Declaración 1</h1>\n");
require("../_lib/author.php");

$ciudades_panama[] = "Panama";
$ciudades_panama[] = "Santiago";
$ciudades_panama[] = "David";

$ciudades['Panama'] = $ciudades_panama;

$ciudades_colombia = 'Bogota';
$ciudades_colombia = 'Medellin';
$ciudades['Colombia'] = $ciudades_colombia;

print('<pre>');
    print_r($ciudades);
print('</pre>');
print('<br />');
print('<pre>');
    var_dump($ciudades);
print('</pre>');
?>