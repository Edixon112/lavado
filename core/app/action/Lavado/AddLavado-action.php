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

    $mensaje="BIENVENIDO AL SERVICIO DE LAVADO SR(A). *".$nombre."*\n\nSU VEHICULO PLACA *".$placa."* ESTA SIENDO LAVADO EN ESTOS MOMENTOS"; 

    $api=new ApiData();

    $api->enviarMensajeGeneral($mensaje,$celular);
     

print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";
?>