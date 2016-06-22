<?php
// obtiene el contenido de un archivo en una cadena
$nombre_archivo = "D:\Servidor\Tantra\current_user\serv00.htm";
$gestor = fopen($nombre_archivo, "r");
$contenido = fread($gestor, filesize($nombre_archivo));
fclose($gestor);

$onlineresult = explode("\n", $contenido);
?>