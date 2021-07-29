<?php
$user = UserData::getById($_SESSION["user_id"]);

$empresa = EmpresaData::getByIdUser($user->id);

$nombre = $_POST["nombre"];

$tipo = new TipoData();

$tipo->nombre = $nombre;
$tipo->idempresa = $empresa;


$aux = $tipo->add();

print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";//redireccion al index
