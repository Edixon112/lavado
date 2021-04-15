<?php 

$precio= PrecioData::delById($_GET["id"]);



print "<script>window.location='index.php?view=viewprecio';</script>";//redireccion al index


?>