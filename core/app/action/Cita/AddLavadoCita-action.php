<?php


date_default_timezone_set("America/Bogota");

$cita=CitaData::getById($_POST["id"]);

"cita ".$cita->id;
"<br>";
$lavado=new LavadoData();

$lavado->id_cita=$cita->id;
"<br>";


$lavado->idcliente=$cita->idcliente;
"<br>";

$lavado->idvehiculo=$_POST["idvehiculo"];
"<br>";

$lavado->fechadeentrada=date("Y-m-d H:i:s");
$var=$lavado->add();


$cita->estado=2;
$aux=$cita->update2();

if($var[0]==1){

   core::alert("Enviado a lavado con exito");
   //print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
   Core::redir("./?view=Cita/AdminViewCita");

}else{

   core::alert("Error al enviar a Lavado");
   print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
}

?>