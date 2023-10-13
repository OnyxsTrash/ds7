<?php
    print("<h1>Funciones: Definición e invocación de parámetros.</h1>\n");
    require('../_lib/author.php');

    function saludo( $nombre ) {
        echo "Hola $nombre " . " <br />";
    }

    function intercambiar( $valor1, $valor2, $valor3 ) {
        return [$valor1, $valor1];
    }

    saludo('Carlos');
    saludo('Juana');

    $valores = [6, 7];

    echo 'Contenido de $valores[] antes del llamado a la funcion';
    print_r($valores);

    $nuevosValores = intercambiar( 5, ...$valores );

    echo 'Contenido de $valores[] despues del llamado a la función';
    print_r( $valores );
    echo "Valor en la primera posición intercambiar(2,1,0)[0]";
?>