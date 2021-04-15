<?php

$tipos = TipoData::getById($_POST["id"]);
//echo $_POST["id"];
//echo $_POST["nombre"];
//echo "<script>console.log( 'Debug Objects: " . $_POST["id"] . "' );</script>";

$tipos->nombre=$_POST["nombre"];

$variable=$tipos->update2();

if($variable[0]==1){
    core::alert("Editado con exito");
    print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";
    
}else{
    core::alert("Error al editar");
print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";
}
?>