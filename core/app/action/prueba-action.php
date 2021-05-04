<?php


date_default_timezone_set("America/Bogota");

$cita=CitaData::getById($_POST["id"]);

echo "cita ".$cita->id;
echo "<br>";
$lavado=new LavadoData();

echo $lavado->id_cita=$cita->id;
echo "<br>";


echo $lavado->idcliente=$cita->idcliente;
echo "<br>";

echo $lavado->idvehiculo=$_POST["idvehiculo"];
echo "<br>";

echo $lavado->fechadeentrada=date("Y-m-d H:i:s");
$lavado->add();


$cita->estado=2;
$aux=$cita->update2();




?>