<?php 
    print("<h1>Funciones: Definición e invocación de parámetros.</h1>\n");
    require('../_lib/author.php');

    function calcularITBMS( $precio ) {
        $itmbs = $precio * 0.07;
        $precio += $itmbs;
        return $itmbs;
    }

    function calcularITBMSRef( &$precio ) {
        $itmbs = $precio * 0.07;
        $precio += $itmbs;
        return $itmbs;
    }

    function calcularITBMS2( $precio ) {
        global $precio;
        $itmbs = $precio * 0.07;
        $precio += $itmbs;
        return $itmbs;
    }

    $precio = 10.00;
    echo "Precio del Producto: B/. $precio" . "<br/>";

    //paso del valor
    echo "<br/>" . "Paso por parámetros por valor" . "<br/>";
    echo "Impuesto del Producto: B/. " . calcularITBMS($precio) . "<br/>";
    echo " Total del Producto: B/. " . ($precio + calcularITBMS($precio) . "<br/>");

    //paso por Referencia
    echo "<br/>" . "Paso por parámetros por valor" . "<br/>";
    echo "Impuesto del Producto: B/. " . calcularITBMSRef($precio) . "<br/>";
    echo " Total del Producto: B/. " . $precio . "<br/>";

    //variable Global
    $precio = 10.00;
    echo "<br/>" . "Paso por parámetros por valor" . "<br/>";
    echo "Impuesto del Producto: B/. " . calcularITBMS2($precio) . "<br/>";
    echo " Total del Producto: B/. " . $precio . "<br/>";
?>