<?php 

$cliente=ClienteData::delById($_POST["id"]);


print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";


?>