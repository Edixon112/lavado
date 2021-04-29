<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cc=$_POST["cc"];
$celular=$_POST["celular"];


$cliente=new ClienteData();

$cliente->nombre=$nombre;
$cliente->apellido=$apellido;
$cliente->cc=$cc;
$cliente->celular=$celular;


$aux=$cliente->add();

print "<script>window.location='index.php?view=Cita/UserCita';</script>";
