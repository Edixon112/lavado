<?php

$user = UserData::getById($_SESSION["user_id"]);

$empresa = EmpresaData::getByIdUser($user->id);


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cc=$_POST["cc"];
$celular=$_POST["celular"];


$cliente=new ClienteData();

$cliente->nombre=$nombre;
$cliente->apellido=$apellido;
$cliente->cc=$cc;
$cliente->celular=$celular;
$cliente->idempresa= $empresa;


$aux=$cliente->add();



if($aux[0]==1){
   core::alert("Por Favor Ingrese Nuevamente solicitud de lavado");
   
   $admins=UserData::getAll();

   
      $mensaje="EL CLIENTE *".$nombre." ".$apellido."* SE ACABA DE REGISTAR";
      $api=new ApiData();

      $api->enviarMensajeAdmin($mensaje);
  
   core::redir("./?view=Cita/UserCita");

}else{

   core::alert("Error al Registrar");

   core::redir("./?view=Cita/UserCita");
}
