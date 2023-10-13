<?php
    print("<h1>Funciones: Variables estáticas.</h1>\n");
    require('../_lib/author.php');
    
    function calcularSuma() {
        static $valor = 0;
        $valor += 1;
        return $valor;
    }

    echo calcularSuma() . " <br /> ";
    echo calcularSuma();
?>