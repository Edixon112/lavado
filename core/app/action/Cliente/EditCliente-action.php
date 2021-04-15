<?php

$user = ClienteData::getById($_POST["id"]);
//echo $_POST["id"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";


$user->nombre=$_POST["nombre"];
$user->apellido= $_POST["apellido"];
$user->cc= $_POST["cc"];
$user->celular= $_POST["celular"];


$variable=$user->update2();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
}
?>