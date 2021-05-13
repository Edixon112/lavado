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
   
   $admins=UserData::getAll();

   foreach($admins as $admin):

      $data = [
       'phone' => "57.$admin->telefono.", // Receivers phone
   
       'body' => "EL CLIENTE *".$nombre." ".$apellido."* SE ACABA DE REGISTAR", // Message
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

   endforeach;
  
   core::redir("./?view=Cita/UserCita");

}else{

   core::alert("Error al Registrar");

   core::redir("./?view=Cita/UserCita");
}
