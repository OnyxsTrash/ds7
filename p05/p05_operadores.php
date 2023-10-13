<?php
print("<h1>Operadores y sus jeraquías</h1>\n");
require('../_lib/author.php');

$apellido = 'Perez';
// Asignación en otra variable por referencia.
$patronimico = &$apellido;
// Visualización del resultado.
echo "<b>Inicialmente:</b><br />";
echo "\$apellido = $apellido<br />";
echo "\$patronímico = $patronimico<br />";
// Modificación de la primera variable.
$apellido = 'Gaitán';
// Visualización del resultado.
echo "<b>Después de la modificación de \$apellido:</b><br />";
echo "\$apellido = $apellido<br />";
echo "\$patronímico = $patronimico<br />";

//Asignación por valor
$x = 13;

//Operador Preincremento
echo 'Valor Original de \$x = ' . $x;
echo 'Valor Aplicando Preincremento de \$x = ' . ++$x;
echo 'Valor Después del Preincremento de \$x = ' . ++$x;

//Operador Postincremento
echo 'Valor Original de \$x = ' . $x;
echo 'Valor Aplicando Preincremento de \$x = ' . $x++;
echo 'Valor Después del Preincremento de \$x = ' . $x++;

//Operador Predecremento
echo 'Valor Original de \$x = ' . $x;
echo 'Valor Aplicando Predecremento de \$x = ' . --$x;
echo 'Valor Después del Predecremento de \$x = ' . --$x;

//Operador Postdecremento
echo 'Valor Original de \$x = ' . $x;
echo 'Valor Aplicando Postdecremento de \$x = ' . $x--;
echo 'Valor Después del Postdecremento de \$x = ' . $x--;

//Operadores Combinado
$x = 13;
$y = 8;
echo '\$x += \$y =>' . $x += $y;
echo '\$x /= \$y =>' . $x /= $y;

//Operadores de Comparación
$z = "8";

//Igualdad
echo "\$y == \$z => $y == $z => " . $y == $z;

//Igualdad y tipos identicos
echo "\$y === \$z => $y === $z => " . $y === $z;

// Operador ternario
$nombre = '';
// Visualización de un mensaje que depende del valor de $nombre.
echo '¡Hola ' . (($nombre == '') ? 'desconocido' : $nombre) . ' ! <br />';
echo '¡Hola ' . ($nombre ?: 'desconocido') . '!<br />';
// Asignación de un valor a la variable $nombre.
$nombre = 'Julio';
// Nuevo intento
echo '¡Hola ' . (($nombre == '') ? 'desconocido' : $nombre) . ' ! <br />';
echo '¡Hola ' . ($nombre ?: 'desconocido') . '!<br />';

//Operando Unión Null
// Muestra un mensaje en función del valor de $primerNombre.
// Por el momento, la variable no se ha inicializado.
echo '¡Hola ' . ($primerNombre ?? 'desconocido') . '! <br />';
// Asignación de un valor a la variable $primerNombre.
$primerNombre = 'Ernesto';
// Nuevo intento.
echo '¡Hola ' . ($primerNombre ?? 'desconocido') . '! <br />';
// Funciona con varios operandos.
// Aquí, la variable $apellido no se ha inicializado.
echo '¡Hola ' . ($apellido ?? $primerNombre ?? 'desconocido') . '! <br />';

//Operador de Comparación Combinado
// Inicialización de tres variables.
$a = 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9;
$b = 1 + 3 + 5 + 7 + 9;
$c = (9 * 10) / 2;
echo "<b>\$a = $a - \$b = $b - \$c = $c </b><br />";
// Comparaciones.
echo '$a <=> $b : ', $a <=> $b, '<br />';
echo '$b <=> $a : ', $b <=> $a, '<br />';
echo '$a <=> $c : ', $a <=> $c, '<br />';
// También funciona con cadenas de caracteres.
$a = 'abc';
$b = 'xyz';
echo "<b>\$a = '$a' - \$b = '$b' </b><br />";
// Comparaciones.
echo '$a <=> $b : ', $a <=> $b, '<br />';
echo '$b <=> $a : ', $b <=> $a, '<br />';

?>