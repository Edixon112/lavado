<?php

$precios = PrecioData::getById($_POST["id"]);
//echo $_POST["id"];
//echo $_POST["nombre"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";

$precios->precio=$_POST["precio"];
$precios->id_tipo=$_POST["tipo"];

$variable=$precios->update2();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Precio/ViewPrecio';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Precio/ViewPrecio';</script>";
}
?>