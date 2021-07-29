<?php

$user = new UserData();
 
$user->nombre = $_POST["nombre"];
$user->apellido = $_POST["apellido"];
$user->cc = $_POST["cedula"];
$user->email = $_POST["email"];
$user->telefono = $_POST["telefono"];
$user->rol = $_POST["rol"];
$user->user = $_POST["username"];
$user->pass = sha1(md5($_POST["password1"]));


$val = UserData::getByIdCC($_POST["cedula"]);

if ($val == null) {


        $user->add(); //METODO PARA AÑADIR LOS DATOS A LA BD
        core::alert("Añadido con exito"); //mensaje de confirmacion
        print "<script>window.location='index.php?view=User/ViewUser';</script>"; //redireccion al index

} else {
        core::alert("EXISTE UN USUARIO CON ESTA IDENTIFICACION");
        print "<script>window.location='index.php?view=User/ViewUser';</script>"; //redireccion al index

}
       // $user->add();//METODO PARA AÑADIR LOS DATOS A LA BD
   
     // core::alert("Añadido con exito");//mensaje de confirmacion
     // print "<script>window.location='index.php?view=Mci_View_User';</script>";//redireccion al index
