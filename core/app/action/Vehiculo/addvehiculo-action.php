<?php
$placa=$_POST["placa"];
$marca=$_POST["marca"];
$tipo=$_POST["tipo"];

$vehiculo=new VehiculoData();

$vehiculo->placa=$placa;
$vehiculo->marca=$marca;
$vehiculo->id_tipo=$tipo;

$aux=$vehiculo->add();

print "<script> window.location='index.php?view=viewvehiculo'; </script>";//redireccion al index


?>