<?php
//Desarrollo de Software VII - Robin Avila
    //p21_apirest_json.php - Consumo de servicio API REST OpenLibro

echo "<h1>Consumo de servicio API REST OpenLibra</h1>\n";
echo "<h2>https://openlibra.com/es/page/public-api</h2>";
require('../_lib/author.php');
echo "<br/>";

/**
 * Opciones para ignorar Errores de certificados SSL. 
 * No es recomendable utilizar en producción.
 */
$stream_opts = [
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false
    ]
];

$datos = json_decode(
    file_get_contents("https://www.etnassoft.com/api/v1/get/?keyword=javascript&publisher_date=2011", false, stream_context_create($stream_opts)),
    true
);

if (!is_null($datos)) {
    foreach ($datos as $libro) {
        echo "<p>";
        echo "<img src=\"" . $libro["thumbnail"] . "\">";
        echo "<br/>";
        echo "Título: " . $libro["title"] . "<br/>";
        echo "Autor: " . $libro["author"] . "<br/>";
        echo "Resumen: " . $libro["content_short"] . "<br/>";
        echo "<a target=\"parent\" href=\"" . $libro["url_download"] . "\">Descargar Libro</a>";
        echo "</p>";
        echo "<br/>";
    }
} else {
    echo "Error al obtener los datos del API REST";
}
?>
