<?php
    //Desarrollo de Software VII - Robin Avila
    //p15_validarDatosFiltros01
    function mostrar($x, $f)
    {//utilizando para mostrar resultados
        echo var_export($x, true), '=>', var_export($f, true), '<br/>';
    }

    //p15_ValidardatosFiltros01.php - Formulario Validacion con Filtros
    print("<H1>Filtros 01: Validacion con Filtros</H1>\n");
    require('../_lib/author.php');

    echo "<b>Filtrar un número entero</b><br/>";
    $valores = array('123', 'abc','1.2', null);

    foreach ($valores as $x) {
        mostrar($x, filter_var($x,FILTER_VALIDATE_INT));
    }

    echo "<b>NULL en lugar de FALSE en caso de error</b><br/>";
    $x = 'abc';
    
    $opciones = FILTER_NULL_ON_FAILURE;
    mostrar($x, filter_var($x, FILTER_VALIDATE_INT));

    echo "<b>Filtrar un numero entero (0-100)</b><br/>";
    //opciones del filtro definidas a traves de una tabla asociativa
    $opciones = array('options' => array('min_range' => 0, 'max_range' => 100));
    $valores = array('0', '100', '101');

    foreach ($valores as $x) {
        mostrar($x, filter_var($x, FILTER_VALIDATE_INT, $opciones));
    }

    echo "<b>+ NULL en lugar de FALSE en caso de error</b><br/>";

    //indicador añadido en la tabla de las opciones
    $opciones = array('options' => array('min_range' => 0, 'max_range' => 100),
    'flags' => FILTER_NULL_ON_FAILURE);
    $x = '101';
    mostrar($x, filter_var($x, FILTER_VALIDATE_INT, $opciones));

    echo "<b>Filtrar con una expresion regular</b><br/>";
    $regexp = '<^[0-9]{2}/[0-9]{2}/[0-9]{4}$>';
    $opciones = array('options' => array('regexp' => $regexp));
    $valores = array('01/01/2016', '01/01/16');
    foreach ($valores as $x){
        mostrar($x, filter_var($x, FILTER_VALIDATE_INT, $opciones));
    }
    
?>