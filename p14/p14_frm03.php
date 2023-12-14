<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 14: Formulario03 Elementos Comunes de un Formulario</title>
</head>
<body>

<?php
//Desarrollo de Software VII - Robin Avila
// p14_frm03.php - Formulario Elementos Comunes p14_frm03.php
print("<h1>Formulario 03: Formulario con Elementos Comunes p14_frm03.php</h1>\n");
require('../_lib/author.php');
?>

<form action="p14_frm04.php" method="POST">
    <h2>Formulario general de envío</h2>
    <label>nombre:</label>
    <input type="text" name="nombre" /><br />
    <label>contraseña:</label>
    <input type="password" name="password" /><br /><br />

    <label>sexo:</label><br />
    <input type="radio" name="sexo" value="F" />Mujer
    <input type="radio" name="sexo" value="M" />Hombre
    <input type="radio" name="sexo" value="N" checked />No sabe<br /><br />

    <label>nacionalidad:</label>
    <select name="nacionalidad">
        <option value="F">Francesa</option>
        <option value="E">Española</option>
        <option value="R">Rusa</option>
        <option value="A">Alemana</option>
    </select><br /><br />

    <label>Países que desea visitar:</label><br />
    <select name="pais[]" multiple>
        <option>Alemania</option>
        <option>España</option>
        <option>Francia</option>
        <option>Rusia</option>
    </select><br /><br />

    <label>Idiomas:</label><br />
    <input type="checkbox" name="idioma[]" value="DE" />Alemán<br />
    <input type="checkbox" name="idioma[]" value="ES" />Español<br />
    <input type="checkbox" name="idioma[]" value="FR" />Francés<br />
    <input type="checkbox" name="idioma[]" value="RU" />Ruso<br />

    <input type="hidden" name="campo_oculto" value="Valor del campo oculto" /><br />

    <label>Comentario:</label><br />
    <textarea name="comentario"></textarea><br />

    <input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="anular" value="Borrar" />
</form>

</body>
</html>
