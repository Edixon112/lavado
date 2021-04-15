<?php

$vehiculos = VehiculoData::getById($_POST["id"]);
//echo $_POST["id"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";


$vehiculos->placa=$_POST["placa"];
$vehiculos->marca= $_POST["marca"];
$vehiculos->id_tipo= $_POST["tipo"];


$variable=$vehiculos->update2();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Vehiculo/ViewVehiculo';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Vehiculo/ViewVehiculo';</script>";
}
?>