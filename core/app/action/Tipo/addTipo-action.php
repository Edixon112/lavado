<?php
$nombre=$_POST["nombre"];

$tipo= new TipoData();

$tipo->nombre=$nombre;

$aux=$tipo->add();

print "<script>window.location='index.php?view=viewtipo';</script>";//redireccion al index



?>