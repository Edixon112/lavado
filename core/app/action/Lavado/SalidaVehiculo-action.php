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

    $mensaje="ESTIMADO/A SR(A). *".$nombre."*\n\nSU VEHICULO PLACA *".$placa."* ESTA LAVADO PUEDE RETIRAR SU VEHICULO.";

    $api=new ApiData();

    $api->enviarMensajeGeneral($mensaje,$celular);
     

print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";
?>