<?php

$cita = CitaData::getById($_POST["id"]);
//echo $_POST["id"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";

$cita->fechapedida=date("Y-m-d H:i:s", strtotime($_POST["hora"]));
$cita->estado= $_POST["estado"];


$variable=$cita->update();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
    
}else{
    core::alert("Error al editar");
    print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";
}
?>