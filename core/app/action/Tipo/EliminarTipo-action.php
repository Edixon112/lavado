<?php

$tipo=TipoData::delById($_POST["id"]);

print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";//redireccion al index

?>