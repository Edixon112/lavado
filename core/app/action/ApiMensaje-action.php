<?php


/*$lavado=LavadoData::getById($_POST["id"]);
$idclientes=$lavado->idcliente;
$idvehiculos=$lavado->idvehiculo;
$cliente=ClienteData::getById($POST_["idclientes"]);
$nombre=$cliente->nombre;
$vehiculo=VehiculoData::getById($POST_["idvehiculos"]);
$placa=$vehiculo->placa;

$data = [
    'phone' => '573015256417', // Receivers phone

    'body' => "El cliente: ".$nombre." dueño del vehiculo portador de la placa ".$placa." se esta lavando", // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$token = '0q3w23nxysd97jfr';
$instanceId = '256099';
$url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);

print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";*/
?>