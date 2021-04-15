<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cc=$_POST["cc"];

$cliente=new ClienteData();

$cliente->nombre=$nombre;
$cliente->apellido=$apellido;
$cliente->cc=$cc;

$aux=$cliente->add();

print "<script>window.location='index.php?';</script>";//redireccion al index




?>