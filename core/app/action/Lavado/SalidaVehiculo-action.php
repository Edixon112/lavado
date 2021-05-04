<?php

date_default_timezone_set("America/Bogota");

$lavado=LavadoData::getById($_POST["id"]);
$lavado->fechadesalida=date("Y-m-d H:i:s");
$lavado->estado=1;
$lavado->update();

$idclientes=$lavado->idcliente;
$idvehiculos=$lavado->idvehiculo;
$cliente=ClienteData::getById($idclientes);
$nombre=$cliente->nombre;
$celular=$cliente->celular;
$vehiculo=VehiculoData::getById($idvehiculos);
$placa=$vehiculo->placa;

$data = [
    'phone' => "57".$celular, // Receivers phone benji 573015256417 

    'body' => "ESTIMADO/A SR(A). ".$nombre."\n\nSU VEHICULO PLACA ".$placa." ESTA LAVADO PUEDE RETIRAR SU VEHICULO.", // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$token = '49mp065yqg0sy42k';
$instanceId = '263969';
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

print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";
?>