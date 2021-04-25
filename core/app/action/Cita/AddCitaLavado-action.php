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


if($aux[0]==1){
   core::alert("Sucita ha ingresado con exito al sistema");
   print "<script>window.location='index.php?view=Cita/UserCita';</script>";
   
}else{
   core::alert("Error al ingresar su Cita");
print "<script>window.location='index.php?view=Cita/UserCita';</script>";
}

}else {

   core::alert("Esta siendo redireccionado al registo para poder solicitar Lavado");

   print "<script>window.location='index.php?view=User/UserAddCliente';</script>";

}

?>