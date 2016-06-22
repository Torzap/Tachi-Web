<?php
// obtiene el contenido de un archivo en una cadena
$nombre_archivo = "C:\Server\current_user\serv00.htm";
$gestor = fopen($nombre_archivo, "r");
$contenido = fread($gestor, filesize($nombre_archivo));
fclose($gestor);

$onlineresult = explode("\n", $contenido);

$online = $onlineresult[0] + $onlineresult[1] + $onlineresult[2] + $onlineresult[3] + $onlineresult[4] + $onlineresult[5] + $onlineresult[6] + $onlineresult[7] + $onlineresult[8] + $onlineresult[9] + $onlineresult[10] + $onlineresult[11] + $onlineresult[15] + $onlineresult[16] + $onlineresult[17] + $onlineresult[19] + $onlineresult[20] + $onlineresult[21] + $onlineresult[23];
$online2 = ($online);
if ($online<0)
echo "Jugadores en linea: 0";
else
echo "Jugadores en linea: $online2";
?>
<TABLE WIDTH=348 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=210 HEIGHT=223 valign="top">
		<div style="padding-left:35px; padding-top:5px ">Aztlan.</div>
		<div style="padding-left:35px; padding-top:3px ">Calabozo del Jinete primer piso.</div>
		<div style="padding-left:35px; padding-top:3px ">Calabozo del Jinete Segundo piso.</div>
		<div style="padding-left:35px; padding-top:3px ">Uxmal.</div>
		<div style="padding-left:35px; padding-top:3px ">Calabozo de Uxmal primer piso.</div>
		<div style="padding-left:35px; padding-top:3px ">Calabozo de Uxmal segundo piso.</div>
		<div style="padding-left:35px; padding-top:3px ">Jina.</div>
		<div style="padding-left:35px; padding-top:3px ">Planicie.</div>
		<div style="padding-left:35px; padding-top:3px ">Exilio.</div>
		<div style="padding-left:35px; padding-top:3px ">Zona Dios (Lvl 60~119).</div>
		<div style="padding-left:35px; padding-top:3px ">Chaturanga.</div>
		<div style="padding-left:35px; padding-top:3px ">Tumba del emperador.</div>
		<div style="padding-left:35px; padding-top:3px ">Fortaleza.</div>
		<div style="padding-left:35px; padding-top:3px ">Biryu.</div>
		<div style="padding-left:35px; padding-top:3px ">Mandara Toxica.</div>
		<div style="padding-left:35px; padding-top:3px ">Zona Dios (Lvl 30~59).</div>
		<div style="padding-left:35px; padding-top:3px ">Mudha.</div>	 
		<div style="padding-left:35px; padding-top:3px ">Forge.</div>
		<div style="padding-left:35px; padding-top:3px ">Ruins.</div>
		<div style="padding-left:35px; padding-top:3px ">Aldea Naga.</div>			
		</TD>	
<? include('online3.php')?>
		<TD WIDTH=82 HEIGHT=223 valign="top">
		<?php if ($onlineresult[0]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>

		<?php if ($onlineresult[2]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[3]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[1]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[4]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[5]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[6]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[7]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[8]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[9]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[10]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[11]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[15]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[16]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[17]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[19]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[20]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[21]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[23]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		<?php if ($onlineresult[25]<0) echo '<div style="padding-left:5px; padding-top:3px; color: #CC0000; ">Sin Servicio</div>'; else echo '<div style="padding-left:5px; padding-top:5px; color: #009900;">En Linea</div>';?>
		</TD>
			</TR>	
</TABLE>