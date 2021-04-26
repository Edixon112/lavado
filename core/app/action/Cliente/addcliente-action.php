<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cc=$_POST["cc"];
$celular=$_POST["celular"];
$activo=$_POST["activo"];

$cliente=new ClienteData();

$cliente->nombre=$nombre;
$cliente->apellido=$apellido;
$cliente->cc=$cc;
$cliente->celular=$celular;
$cliente->activo=$activo;

$aux=$cliente->add();

if($cliente->activo==0){

print "<script>window.location='index.php?view=Cita/UserCita';</script>";

}else{

print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
}
?>