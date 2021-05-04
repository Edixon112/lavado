<?php 

$cliente=CitaData::delById($_POST["id"]);


print "<script>window.location='index.php?view=Cita/AdminViewCita';</script>";


?>