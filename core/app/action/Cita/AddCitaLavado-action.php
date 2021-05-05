<?php

date_default_timezone_set("America/Bogota");


$cedula=$_POST["cc"];

$cliente=ClienteData::getByCC($cedula);
if ($cliente!=NULL){

$cita= new CitaData();

$cita->idcliente=$cliente->id;

$cita->estado=0;

$cita->fechapedida=date("Y-m-d H:i:s", strtotime($_POST["hora"]));


$aux=$cita->add();


if($aux[0]==1){
   core::alert("Su lavado ha ingresado con exito al sistema");
   print "<script>window.location='index.php?view=Cita/UserCita';</script>";

   $cliente=ClienteData::getByCC($cedula);

   $data = [
      'phone' => '573015256417', // Receivers phone
  
      'body' => "EL CLIENTE *".$cliente->nombre."* SOLICITA UN LAVADO PARA LAS *".$cita->fechapedida."*", // Message
  ];
  $json = json_encode($data); // Encode data to JSON
  // URL for request POST /message
  $token = ' ihdrcqqh6f0routa';
  $instanceId = '265655';
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
   
}else{
   core::alert("Error al ingresar su Cita");
   print "<script>window.location='index.php?view=Cita/UserCita';</script>";
}


}else {

   core::alert("Usuario no registrado");

   print "<script>window.location='index.php?view=Cita/UserAddCliente&cedula=".$cedula."';</script>";

}
?>