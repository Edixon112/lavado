<?php 

$cliente=CitaData::delById($_GET["id"]);


print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";


?>