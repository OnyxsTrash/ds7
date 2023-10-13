<?php
    print("<h1>Coversión de tipo de datos</h1>\n");
    require('../_lib/author.php');

    $moneda = 10;
    echo "Valor Inicial de \$moneda = $moneda </br>";
    echo "Informacion de la variable \$moneda var_dump($moneda)</br>";
    var_dump($moneda);
    echo "Informacion de la variable \$moneda con print_r($moneda)</br>";
    echo "<pre>";
    print_r($moneda);
    echo "</pre>";

    $moneda = $moneda . "Dolares";
    echo "</br>Valor Intermedio de \$moneda= $moneda </br>";
    var_dump($moneda);

        $moneda = (integer) $moneda;
    echo "</br>Valor Intermedio de \$moneda= $moneda </br>";
    var_dump($moneda);

    settype($moneda, "float");
    echo "</br>Valor despues de utilizar settype \$moneda= $moneda </br>";
    var_dump($moneda);

    $valores = array (true, 1, 2.0, "Texto");
    $valor = $valores[rand(0,3)];

    if ( is_int($valor) ) {
        echo "La variable es de tipo entero \$valor = $valor </br>";
    }
    else {
        echo "La variable NO es de tipo entero \$valor = $valor es de tipo </br>", var_dump($valor);
    }
?>