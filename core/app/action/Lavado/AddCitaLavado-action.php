<?php

date_default_timezone_set("America/Bogota");


$cedula=$_POST["cc"];



$cliente=ClienteData::getByCC($cedula);

if ($cedula==$cliente->cc){

$cita= new CitaData();

$cita->idcliente=$cliente->id;

$cita->estado=0;

$cita->fechapedida=date("Y-m-d H:i:s", strtotime($_POST["hora"]));


$aux=$cita->add();


}else {

   print "<script>window.location='index.php?view=Cliente/UserAddCliente';</script>";

}

?>