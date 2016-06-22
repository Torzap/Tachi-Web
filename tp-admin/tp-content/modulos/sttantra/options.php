 <div class="title">Configuraciones  de descargas</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_sttantra where id='1'");
$row = mysql_fetch_row($result);

?>
<blockquote>
<form name="actualizar" method="post" action="sttantra.php?modulo=act-options">

<label>Titulo de la STTantra web:</label><br />
<Input type="text" value="<?php echo $row['1'] ?>" style="width:35%;" id="titulo" name="titulo" />// Titulo o nombre de la web STTantra
<br />

<br />
<label>Nombre del servidor:</label><br />
<Input type="text" value="<?php echo $row['2'] ?>" style="width:35%;" id="nombre" name="nombre" />// Nombre del Tantra o Servidor
<br />

<br />
<label>Direcci&oacute;n IP del servidor:</label><br />
<Input type="text" value="<?php echo $row['3'] ?>" style="width:35%;" id="ip" name="ip" />// IP del PC o Dedicado
<br />

<br />
<label>Bot&oacute;n derecho del mouse:</label><br />
<select name="boton" style="width:28%;">
<option disabled selected>Seleccione un modo</option>
<option value="true" name="true">Activar</option>
<option value="false" name="false">Desactivar</option>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['4'] ?>" style="width:5%;" disabled /> // true = habilitado, false = bloqueado<br /><br /><br />

<br /><p><center>
<input name='submit' id='login-submit' type='Submit' value='Guardar' style='width:15%; height:40px; border-radius:5px;'></center></p>
</form>
</blockquote>
</td></tr></tbody></table>