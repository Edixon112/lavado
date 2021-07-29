<?php

$user = UserData::getById($_SESSION["user_id"]);

$empresa = EmpresaData::getByIdUser($user->id);


date_default_timezone_set("America/Bogota");

$cita = CitaData::getById($_POST["id"]);

$cita->id;

$lavado = new LavadoData();

$lavado->id_cita = $cita->id;

$lavado->idcliente = $cita->idcliente;

$lavado->idvehiculo = $_POST["idvehiculo"];

$lavado->fechadeentrada = date("Y-m-d H:i:s");

$lavado->idempresa = $empresa;

$var = $lavado->add();

$cita->estado = 2;

$aux = $cita->update2();


if ($var[0] == 1) {

   $cliente = ClienteData::getById($lavado->idcliente);
   $nombre = $cliente->nombre;
   $celular = $cliente->celular;
   $vehiculo = VehiculoData::getById($lavado->idvehiculo);
   $placa = $vehiculo->placa;

   $mensaje = "BIENVENIDO AL SERVICIO DE LAVADO SR(A). *" . $nombre . "*\n\nSU VEHICULO PLACA *" . $placa . "* ESTA SIENDO LAVADO EN ESTOS MOMENTOS";
   $api = new ApiData();

   $api->enviarMensajeGeneral($mensaje, $celular);


   core::alert("Enviado a lavado con exito");

   //print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
   Core::redir("./?view=Cita/AdminViewCita");
} else {

   core::alert("Error al enviar a Lavado");
   print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
}
