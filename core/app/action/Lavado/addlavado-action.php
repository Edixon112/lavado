<?php

date_default_timezone_set("America/Bogota");
$idcliente=$_POST["idcliente"];
$idvehiculo=$_POST["idvehiculo"];

$lavado=new LavadoData();

echo $lavado->idcliente=$idcliente;
echo $lavado->idvehiculo=$idvehiculo;
echo $lavado->fechadeentrada=date("Y-m-d H:i:s");

$aux=$lavado->add();


print "<script>window.location='index.php?view=Lavado/viewLavado';</script>";



?>