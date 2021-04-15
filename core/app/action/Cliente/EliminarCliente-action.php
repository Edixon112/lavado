<?php 

$cliente= ClienteData::delById($_GET["id"]);



print "<script>window.location='index.php?view=viewcliente';</script>";//redireccion al index


?>