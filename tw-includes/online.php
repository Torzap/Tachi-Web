<?php
// obtiene el contenido de un archivo en una cadena
$nombre_archivo = "C:\Servidor\Tantra\current_user\serv00.htm";
$gestor = fopen($nombre_archivo, "r");
$contenido = fread($gestor, filesize($nombre_archivo));
fclose($gestor);

$onlineresult = explode("\n", $contenido);

$online = $onlineresult[0] + $onlineresult[1] + $onlineresult[2] + $onlineresult[3] + $onlineresult[4] + $onlineresult[5] + $onlineresult[6] + $onlineresult[7] + $onlineresult[8] + $onlineresult[9] + $onlineresult[10] + $onlineresult[11] + $onlineresult[15] + $onlineresult[16] + $onlineresult[17] + $onlineresult[19] + $onlineresult[20] + $onlineresult[21] + $onlineresult[23];
$online2 = ($online);
if ($online<0)
	echo "0nl1n3:0";
else
	echo "0nl1n3:$online2";
?>