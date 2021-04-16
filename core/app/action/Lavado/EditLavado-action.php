<?php

$lavados=LavadoData::getById($_POST["id"]);
//echo $_POST["id"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";

     
$lavados->idcliente=$_POST["cliente"];
$lavados->idvehiculo= $_POST["vehiculo"];


$variable=$lavados->update2();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Lavado/ViewLavado';</script>";
}
?>