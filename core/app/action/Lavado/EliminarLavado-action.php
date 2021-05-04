<?php 

$lavado=LavadoData::delById($_POST["id"]);


print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";


?>