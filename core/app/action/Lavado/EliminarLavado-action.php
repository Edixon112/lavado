<?php 

$lavado=LavadoData::delById($_GET["id"]);


print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";


?>