<?php


date_default_timezone_set("America/Bogota");

$cita=CitaData::getById($_POST["id"]);

$cita->id;

$lavado=new LavadoData();

$lavado->id_cita=$cita->id;

$lavado->idcliente=$cita->idcliente;

$lavado->idvehiculo=$_POST["idvehiculo"];

$lavado->fechadeentrada=date("Y-m-d H:i:s");

$var=$lavado->add();

$cita->estado=2;

$aux=$cita->update2();


if($var[0]==1){

  

   
   $cliente=ClienteData::getById($lavado->idcliente);
   $nombre=$cliente->nombre;
   $celular=$cliente->celular;
   $vehiculo=VehiculoData::getById($lavado->idvehiculo);
   $placa=$vehiculo->placa;
   
   $data = [
      'phone' => "57".$celular, // Receivers phone
  
      'body' => "BIENVENIDO AL SERVICIO DE LAVADO SR(A). *".$nombre."*\n\nSU VEHICULO PLACA *".$placa."* ESTA SIENDO LAVADO EN ESTOS MOMENTOS", // Message
  ];
  $json = json_encode($data); // Encode data to JSON
  // URL for request POST /message
  $token = '1w2qgreajitbgacz';
  $instanceId = '267919';
  $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
  // Make a POST request
  $options = stream_context_create(['http' => [
          'method'  => 'POST',
          'header'  => 'Content-type: application/json',
          'content' => $json
      ]
  ]);
  // Send a request
  $result = file_get_contents($url, false, $options);

  core::alert("Enviado a lavado con exito");

   //print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
   Core::redir("./?view=Cita/AdminViewCita");

}else{

   core::alert("Error al enviar a Lavado");
   print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
}

?>