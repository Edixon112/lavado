<?php 

$precio= PrecioData::delById($_POST["id"]);



print "<script>window.location='index.php?view=Precio/ViewPrecio';</script>";//redireccion al index


?>