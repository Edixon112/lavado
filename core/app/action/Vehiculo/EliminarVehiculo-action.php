<?php 
date_default_timezone_set("America/Bogota");

$vehiculo= VehiculoData::delById($_GET["id"]);



print "<script>window.location='index.php?view=Vehiculo/ViewVehiculo';</script>";//redireccion al index


?>