<?php
$user = UserData::getById($_SESSION["user_id"]);

$nombre=$_POST["nombre"];

$tipo= new TipoData();

$tipo->nombre=$nombre;
$tipo->idempresa=$user->idempresa;


$aux=$tipo->add();

print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";//redireccion al index



?>