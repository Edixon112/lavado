<?php

$user = UserData::getById($_SESSION["user_id"]);

$empresa = EmpresaData::getByIdUser($user->id);


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cc = $_POST["cc"];
$celular = $_POST["celular"];
$activo = $_POST["activo"];

$cliente = new ClienteData();

$cliente->nombre = $nombre;
$cliente->apellido = $apellido;
$cliente->cc = $cc;
$cliente->celular = $celular;
$cliente->activo = $activo;
$cliente->idempresa = $empresa;

$aux = $cliente->add();

print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
