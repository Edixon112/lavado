<?php
$id_tipo=$_POST["id_tipo"];
$precio=$_POST["precio"];

$precio= new PrecioData();

$precio->id_tipo=$id_tipo;
$precio->precio=$precio;

$aux=$precio->add();

print "<script>window.location='index.php?';</script>";//redireccion al index




?>