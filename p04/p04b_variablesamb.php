<?php
    require('../_lib/author.php');

    print "El valor dentro del archivo incluido es:" .$valor. " <br /> \n";
    $valor = 10;
    print "El valor modificado dentro del archivo incluido es: " .$valor. " <br /> \n";
    echo "El valor dentro del archivo incluido es CONSTANTE = ", CONSTANTE, '<br/>';
?>