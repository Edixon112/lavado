<?php


date_default_timezone_set("America/Bogota");
$idcliente=$_POST["idcliente"];
$idvehiculo=$_POST["idvehiculo"];

$lavado=new LavadoData();

$lavado->idcliente=$idcliente;
$lavado->idvehiculo=$idvehiculo;
$lavado->fechadeentrada=date("Y-m-d H:i:s");

$aux=$lavado->add();


$cliente=ClienteData::getById($idcliente);
$nombre=$cliente->nombre;
$celular=$cliente->celular;
$vehiculo=VehiculoData::getById($idvehiculo);
$placa=$vehiculo->placa;

$data = [
    'phone' => "57".$celular, // Receivers phone

    'body' => "BIENVENIDO AL SERVICIO DE LAVADO SR(A). ".$nombre."\n\nSU VEHICULO PLACA ".$placa." ESTA SIENDO LAVADO EN ESTOS MOMENTOS", // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$token = '5dl7xplzo2r32lhl';
$instanceId = '260956';
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