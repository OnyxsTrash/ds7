<?php 
    //Desarrollo de Software VII - Robin Avila
    //p20_soap01.php - Consumo de servicio SOAP w3schools tempconvert


echo "<h1>Consumo de servicio SOAP w3schools tempconvert</h1>\n";
require('../_lib/author.php');
echo "<br/>";

$wsdl = 'https://www.w3schools.com/xml/tempconvert.asmx?WSDL';
$client = new SoapClient($wsdl, array('trace' => 1));

$input_celsius = 50;
$request_param = array('Celsius' => $input_celsius);

try {
    $response_param = $client->CelsiusToFahrenheit($request_param);
    echo $input_celsius . ' Celsius => ' . $response_param->CelsiusToFahrenheitResult . ' Fahrenheit';
} catch (Exception $e) {
    echo "<h2>Error </h2>";
    echo $e->getMessage();
}
?>
