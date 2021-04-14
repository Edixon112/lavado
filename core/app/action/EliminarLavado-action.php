<?php 

$lavado= LavadoData::delById($_GET["id"]);



print "<script>window.location='index.php?view=viewlavado';</script>";//redireccion al index


?>