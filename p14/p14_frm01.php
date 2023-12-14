<!DOCTYPE html>
<html lang="es">
    //Desarrollo de Software VII - Robin Avila
    //p14_frm01.php - Script para procesar formulario p14_frm02.php

    <head>
        <meta charset="UTF-8">
        <title>Practica 14: Formulario 01 GET/POST REQUEST</title>
    </head>

    <body>
        <?php
        //p14_form01.php - Formulario para captura simple de datos
        print("<H1>Formulario 01: Presentacion del formulario de captura</H1>\n");
        require('../_lib/author.php');

        ?>

            <form action="p14_frm02.php" method="GET">
                <label>Edad:</label>
                <input type="text" name="edad">

                <label>Contraseña:</label>
                <input type="password" name="contraseña">
                <input type="submit" value="aceptar">
            </form>





    </body>

    


</html>

