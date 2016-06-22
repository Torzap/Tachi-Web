 <div class="title">Configuraciones  de descargas</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_downloads where id='1'");
$row = mysql_fetch_row($result);

?>
<blockquote>
<form name="actualizar" method="post" action="settings.php?modulo=act-downloads">

<label>Enlace directo:</label><br />
<Input type="text" value="<?php echo $row['1'] ?>" style="width:35%;" id="directo" name="directo" />// Direcci&oacute;n de descarga del servidor
<br />

<br />
<label>Enlace mediafire:</label><br />
<Input type="text" value="<?php echo $row['2'] ?>" style="width:35%;" id="mediafire" name="mediafire" />// Direcci&oacute;n de descarga de mediafire.com
<br />

<br />
<label>Enlace depositfiles:</label><br />
<Input type="text" value="<?php echo $row['3'] ?>" style="width:35%;" id="depositfiles" name="depositfiles" />// Direcci&oacute;n de descarga de depositfiles.com
<br />

<br />
<label>Enlace rapidshare:</label><br />
<Input type="text" value="<?php echo $row['4'] ?>" style="width:35%;" id="rapidshare" name="rapidshare" />// Direcci&oacute;n de descarga de rapidshare.com
<br />

<br /><p><center><div class='btnlogeo'>
<input name='submit' type='Submit' value='Guardar' id='login-submit' style='width:15%; height:40px; border-radius:5px;'></div></center></p>
</form>
</blockquote>
</td></tr></tbody></table>