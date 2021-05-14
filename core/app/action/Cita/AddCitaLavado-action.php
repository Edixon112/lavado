<?php

date_default_timezone_set("America/Bogota");

$fechaactual=date("Y-m-d H:i:s");
$temp=date("Y-m-d H:i:s", strtotime($_POST["hora"]));



$cedula=$_POST["cc"];

$cliente=ClienteData::getByCC($cedula);

if ($temp>$fechaactual){

   if ($cliente!=NULL){

   $cita= new CitaData();

   $cita->idcliente=$cliente->id;

   $cita->estado=0;

   $cita->fechapedida=date("Y-m-d H:i:s", strtotime($_POST["hora"]));

   $aux=$cita->add();


      if($aux[0]==1){
         core::alert("Su lavado ha ingresado con exito al sistema");

      
         $cliente=ClienteData::getByCC($cedula);
      
      
         $mensaje="EL CLIENTE *".$cliente->nombre." ".$cliente->apellido."* SOLICITA UN LAVADO PARA LAS *".$cita->fechapedida."*"; 
      
         $api=new ApiData();

         $api->enviarMensajeAdmin($mensaje);
         //$api->enviarMensajeGeneral($mensaje,3015256417);
         //VUE JS 
      

         Core::redir("./?view=Cita/UserCita");
      
      
      }else{
      
         core::alert("Error al ingresar su Cita ");

         Core::redir("./?view=Cita/UserCita");
      
      }


   }else {

      core::alert("Usuario no registrado ");

      print "<script>window.location='index.php?view=Cita/UserAddCliente&cedula=".$cedula."';</script>";

   }


}else{
   
   core::alert("Fecha invalida");

   core::redir("./?view=Cita/UserCita");
}
?>