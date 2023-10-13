<?php
print("<h1>Ámbito de las constantes y variables</h1>\n");
require('../_lib/author.php');

define('CONSTANTE', 'valor de la CONSTANTE');
define('CONSTANTE_ID', md5(uniqid(rand())));
const OTRA_CONSTANTE = 'PHP 5.6';
const ULTIMA_CONSTANTE = OTRA_CONSTANTE. ' (nuevo)';

$valor = 5;
echo "El valor es \$Valor: " . $valor . "<br/> \n";
print "El valor es \$Valor: $valor <br/>\n";

include "p04b_variablesamb.php";

print "El valor despues de incluir el scrip es \$valor: $valor <br/>\n";

variableTest();

print "El valor fuera de la funcion es \$valor: $valor <br/>\n";

echo 'CONSTANTE = ', CONSTANTE, '<br />';
echo 'CONSTANTE_ID = ', CONSTANTE_ID, '<br />';
echo 'OTRA_CONSTANTE = ', OTRA_CONSTANTE, '<br />';
echo 'ULTIMA_CONSTANTE = ', ULTIMA_CONSTANTE, '<br />';

function variableTest(){
    $valor = 20;
    print "El valor depues de incluir el script es $valor <br />";
}
?>