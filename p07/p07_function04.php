<?php
    print("<h1>Funciones: Variables.</h1>\n");
    require('../_lib/author.php');

    function calcularSuma( $valor1, $valor2 ) {
        return $valor1 + $valor2;
    }

    function calcularResta( $valor1, $valor2 ) {
        return $valor1 - $valor2;
    }
    
    function tipoOperacion( $Tipo_Operacion, $valor1, $valor2 ) {
        return $Tipo_Operacion( $valor1, $valor2 );
    }


    echo "Suma 6 + 5 = " . tipoOperacion("calcularSuma", 6, 5) . "<br/>";
    echo "Resta 6 - 5 = " . tipoOperacion("calcularResta", 6, 5) . "<br/>";
?>