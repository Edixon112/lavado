<?php

$tipo=TipoData::delById($_GET["id"]);

print "<script>window.location='index.php?view=Tipo/ViewTipo';</script>";//redireccion al index

?>