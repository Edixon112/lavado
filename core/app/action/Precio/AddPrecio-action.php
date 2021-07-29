<?php

$user = UserData::getById($_SESSION["user_id"]);

$empresa = EmpresaData::getByIdUser($user->id);


$id_tipo = $_POST["tipo"];
$precio = $_POST["precio"];

$precios = new PrecioData();

$precios->id_tipo = $id_tipo;
$precios->precio = $precio;
$precios->idempresa = $empresa;

$aux = $precios->add();

print "<script>window.location='index.php?view=Precio/ViewPrecio';</script>";//redireccion al index
