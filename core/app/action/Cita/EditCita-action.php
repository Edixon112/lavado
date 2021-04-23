<?php

$cita = CitaData::getById($_POST["id"]);
//echo $_POST["id"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";


$cita->fechapedida=$_POST["fecha"];
$cita->idcliente= $_POST["idcliente"];
$cita->estado= $_POST["estado"];


$variable=$cita->update();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Cliente/ViewCliente';</script>";
}
?>