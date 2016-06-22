<?php
// obtiene el contenido de un archivo en una cadena
$nombre_archivo = "C:\Server\current_user\serv00.htm";
$gestor = fopen($nombre_archivo, "r");
$contenido = fread($gestor, filesize($nombre_archivo));
fclose($gestor);

$onlineresult = explode("\n", $contenido);

$online = $onlineresult[0] + $onlineresult[1] + $onlineresult[2] + $onlineresult[3] + $onlineresult[4] + $onlineresult[5] + $onlineresult[6] + $onlineresult[7] + $onlineresult[8] + $onlineresult[9] + $onlineresult[10] + $onlineresult[11] + $onlineresult[12] + $onlineresult[13] + $onlineresult[14] + $onlineresult[15] + $onlineresult[16] + $onlineresult[17] + $onlineresult[18] + $onlineresult[19] + $onlineresult[20] + $onlineresult[21] + $onlineresult[22] + $onlineresult[23] + $onlineresult[24] + $onlineresult[25] + $onlineresult[26] + $onlineresult[27] + $onlineresult[28] + $onlineresult[29] + $onlineresult[30] + $onlineresult[31] + $onlineresult[32] + $onlineresult[33] + $onlineresult[34] + $onlineresult[35] + $onlineresult[36];
$online2 = ($online);
if ($online<0)
	echo "En linea: 0 jugadores";
else
	echo "En linea: $online2 jugadores";
?>
<table id="mapas" width="80%" align="center" border="0">
		<tbody>
<TR style="font-size:12px;">
  <TD><strong>Mapa</strong></TD>
  <TD valign="middle"><strong>Estado del Mapa</strong></TD>
</TR>
<TR style="font-size:12px;">
  <TD>Aztlan</TD>
  <TD valign="middle"><?php if ($onlineresult[1]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Calabozo del Jinete primer piso</TD>
  <TD valign="middle"><?php if ($onlineresult[2]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Calabozo del Jinete Segundo piso</TD>
  <TD valign="middle"><?php if ($onlineresult[3]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Uxmal</TD>
  <TD valign="middle"><?php if ($onlineresult[2]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Calabozo de Uxmal primer piso</TD>
  <TD valign="middle"><?php if ($onlineresult[5]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Calabozo de Uxmal segundo piso</TD>
  <TD valign="middle"><?php if ($onlineresult[6]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Jina</TD>
  <TD valign="middle"><?php if ($onlineresult[7]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Planicie</TD>
  <TD valign="middle"><?php if ($onlineresult[8]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Exilio</TD>
  <TD valign="middle"><?php if ($onlineresult[9]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Zona Dios (Lvl 60~119)</TD>
  <TD valign="middle"><?php if ($onlineresult[10]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Chaturanga</TD>
  <TD valign="middle"><?php if ($onlineresult[11]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Tumba del emperador</TD>
  <TD valign="middle"><?php if ($onlineresult[12]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Fortaleza</TD>
  <TD valign="middle"><?php if ($onlineresult[16]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Biryu</TD>
  <TD valign="middle"><?php if ($onlineresult[17]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Mandara Toxica</TD>
  <TD valign="middle"><?php if ($onlineresult[18]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Zona Dios (Lvl 30~59)</TD>
  <TD valign="middle"><?php if ($onlineresult[20]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Mudha</TD>
  <TD valign="middle"><?php if ($onlineresult[21]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Forge</TD>
  <TD valign="middle"><?php if ($onlineresult[22]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
  <TD valign="middle">Ruins</TD>
  <TD valign="middle"><?php if ($onlineresult[24]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
</TR>
<TR style="font-size:12px;">
<TD valign="middle"> Aldea Naga			
</TD>
	
<TD valign="middle"><?php if ($onlineresult[26]<0) echo '<div><img src="tw-content/images/off.jpg"></div>'; else echo '<div><img src="tw-content/images/on.jpg"></div>';?></TD>
	</TR>	
		</tbody></table>
Conectados: 
<?php
$url = "http://".$Server['IP']."/tw-includes/online.php";
$rdf = parse_url($url);
        $fp = @fsockopen($rdf['host'], 80, $errno, $errstr, 15);
        if (!$fp) {
                $string = "unavailable";
        }
        if ($fp) {
                fputs($fp, "GET " . $rdf['path'] . "?" . $rdf['query'] . " HTTP/1.0\r\n");
                fputs($fp, "HOST: " . $rdf['host'] . "\r\n\r\n");
                $string        = "";
                while(!feof($fp)) {
                $stringtext = fgets($fp,300);
                $string .= chop($stringtext);
            }
            fputs($fp,"Connection: close\r\n\r\n");
            fclose($fp);

$string = strstr($string, "0nl1n3:");
$string = substr($string, 7);

		}
echo $string;
?>
