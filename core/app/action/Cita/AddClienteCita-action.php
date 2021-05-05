<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cc=$_POST["cc"];
$celular=$_POST["celular"];


$cliente=new ClienteData();

$cliente->nombre=$nombre;
$cliente->apellido=$apellido;
$cliente->cc=$cc;
$cliente->celular=$celular;


$aux=$cliente->add();



if($aux[0]==1){
   core::alert("Por Favor Ingrse Nuevamente solicitud de lavado");
   print "<script>window.location='index.php?view=Cita/UserCita';</script>";

   $data = [
    'phone' => '573015256417', // Receivers phone
 
    'body' => "EL CLIENTE *".$nombre."* *".$apellido."* SE ACABA DE REGISTAR", // Message
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
   core::alert("Error al Registrar");
   print "<script>window.location='index.php?view=Cita/UserCita';</script>";
}
