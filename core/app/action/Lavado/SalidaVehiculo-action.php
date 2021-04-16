<?php

date_default_timezone_set("America/Bogota");

$lavado=LavadoData::getById($_GET["id"]);
$lavado->fechadesalida=date("Y-m-d H:i:s");
$lavado->estado=1;
$lavado->update();

print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";

?>