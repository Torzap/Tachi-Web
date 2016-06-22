<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Descargas</span></div>
<br />
<?php
include ('tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_downloads where id='1'");
$row = mysql_fetch_row($result);

$Link['1'] = $row['1'];
$Link['2'] = $row['2'];
$Link['3'] = $row['4'];
$Link['4'] = $row['3'];
?>
<center><table align="center" width="100%" height="150" cellspacing="3" >
  <tr>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span style="font-color: YellowGreen;">Caracteristica</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span style="font-color: YellowGreen;">Requerimientos minimos</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc;"><span style="font-color: YellowGreen;">Requerimientos recomendados</span></td>
  </tr>
  <tr>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span  >Memoria RAM</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc">256 MB</td>
    <td align="center" style="border-bottom:1px dashed #ccc">512MB</td>
  </tr>
  <tr>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span  >Procesador</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc">Pentium III 800MHZ</td>
    <td align="center" style="border-bottom:1px dashed #ccc">Celeron o Amd 1.4GHZ</td>
  </tr>
  <tr>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span  >VGA</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc">16MB Tarjeta de video 3D</td>
    <td align="center" style="border-bottom:1px dashed #ccc">64MB Tarjeta de video 3D</td>
  </tr>
  <tr>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc"><span  >OS</span></td>
    <td align="center" style="border-bottom:1px dashed #ccc; border-right:1px dashed #ccc">WINDOWS 98, Me, 200.</td>
    <td align="center" style="border-bottom:1px dashed #ccc">WINDOWS XP Direct X 9</td>
  </tr>
  <tr>
    <td align="center" style="; border-right:1px dashed #ccc"><span   >HDD</span></td>
    <td align="center" style="; border-right:1px dashed #ccc">1.2 GB o Mayor</td>
    <td align="center">1.2 GB o Mayor</td>
  </tr>
<tr><td colspan="3">
</td></tr></table>
<div class="tw-downloads" align="center"><table align="center" width="100%" height="10" border="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span class="Estilo7">Descargar Instalador </span></td>
    </tr>
  <tr>
    <td align="center"><a href="<?php echo ''.$Link['1'].''; ?>" target="_blank" title="Descargar de nuestros servidores">Descarga directa</a></td>
    <td align="center"><a href="<?php echo ''.$Link['2'].''; ?>" target="_blank" title="Descargar de mediafire">Mirror Mediafire </a></td>
  </tr>
  <tr>
    <td align="center"><a href="<?php echo ''.$Link['4'].''; ?>" target="_blank" title="Descargar de depositfiles">Mirror DepositFiles </a></td>
    <td align="center"><a href="<?php echo ''.$Link['3'].''; ?>" target="_blank" title="Descargar de rapidshare">Mirror Rapidshare </a></td>
  </tr>
</table></div></center>