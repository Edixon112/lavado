<?php

$cita = CitaData::getById($_GET["id"]);

$fechainicio = $cita->fechapedida;

$fechatope = new DateTime($fechainicio);
$fechatope->add(new DateInterval('P0Y0M0DT0H30M0S'));
$fechatope->format('Y-m-d H:i:s');

$contador = CitaData::contadorFecha($fechainicio,$fechatope->format('Y-m-d H:i:s'));
$contador->catidad_de_fechas_en_rango;  


$contadorcita = CitaData::contadorFechacita($fechainicio,$fechatope->format('Y-m-d H:i:s'));
$contadorcita->catidad_de_fechas_en_rango;

//---------------------------------------------------------------------------------------------------------------------

$data = [
    'phone' => '573015256417', // Receivers phone

    'body' => "CANTIDAD DE *LAVADOS* EN PROCESO [".$contador->catidad_de_fechas_en_rango."]
     \n\n  Y SE ACEPTARON [".$contadorcita->catidad_de_fechas_en_rango."] *CITAS* QUE ESTAN EN EL MISMO RANGO DE TIEMPO", // Message
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


// antes de confirmar se debe pasar por logica si se confirma o no


$cita->estado=1;

$cita->idcliente;

$aux=$cita->update();


$cliente=ClienteData::getById($cita->idcliente);
$nombre=$cliente->nombre;
$celular=$cliente->celular;

$data = [
    'phone' => "57".$celular, // Receivers phone

    'body' => "BIENVENIDO AL SERVICIO DE LAVADO SR(A). ".$nombre." SU SOLICITUD ESTA APROBADA \n\n ESPERAMOS SU VEHICULO EL DIA: fecha de cita", // Message
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

print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";

?>
