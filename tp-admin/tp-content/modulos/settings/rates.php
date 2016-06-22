 <div class="title">Rates del servidor</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_rates where id='1'");
$row = mysql_fetch_row($result);

?>
<blockquote>
<form name="actualizar" method="post" action="settings.php?modulo=act-rates">

<label>Experiencia del servidor:</label><br />
<Input type="text" value="<?php echo $row['1'] ?>" style="width:15%;" id="wExp" name="wExp" />&nbsp;&nbsp;&nbsp;<Input type="text" value="<?php echo $row['1'] ?>" style="width:11%;" disabled />// Rate de experiencia
<br />

<br />
<label>Rupiahs del servidor:</label><br />
<Input type="text" value="<?php echo $row['2'] ?>" style="width:15%;" id="wRuph" name="wRuph" />&nbsp;&nbsp;&nbsp;<Input type="text" value="<?php echo $row['2'] ?>" style="width:11%;" disabled />// Rate de oro
<br />

<br />
<label>Cast de Master Points:</label><br />
<Input type="text" value="<?php echo $row['3'] ?>" style="width:15%;" id="wMst" name="wMst" />&nbsp;&nbsp;&nbsp;<Input type="text" value="<?php echo $row['3'] ?>" style="width:11%;" disabled />// Rate de MP
<br />

<br />
<label>Versi&oacute;n o Kathana del servidor:</label><br />
<select name="wKth" id="wKth" style="width:16%;">
<optgroup label="Serie 1">
<option value="1.0" name="1.0">Kathana 1.0</option>
<option value="1.1" name="1.1">Kathana 1.1</option>
<option value="1.2" name="1.2">Kathana 1.2</option>
</optgroup>
<optgroup label="Serie 2">
<option value="2.0" name="2.0">Kathana 2.0</option>
<option value="2.1" name="2.1">Kathana 2.1</option>
<option value="2.2" name="2.2">Kathana 2.2</option>
</optgroup>
<optgroup label="Serie 3">
<option value="3.0" name="3.0">Kathana 3.0</option>
<option value="3.1" name="3.1">Kathana 3.1</option>
<option value="3.2" name="3.2">Kathana 3.2</option>
</optgroup>
<optgroup label="Serie 4">
<option value="4.0" name="4.0">Kathana 4.0</option>
<option value="4.1" name="4.1">Kathana 4.1</option>
<option value="4.2" name="4.2" selected>Kathana 4.2</option>
</optgroup>
<optgroup label="Serie 5">
<option value="5.0" name="5.0">Kathana 5.0</option>
<option value="5.1" name="5.1">Kathana 5.1</option>
<option value="5.2" name="5.2">Kathana 5.2</option>
</optgroup>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['4'] ?>" style="width:11%;" disabled />// Kathana del juego
<br />

<br />
<label>Estado del servidor:</label><br />
<select name="wSta" id="wSta" style="width:16%;">
<option selected disabled>Escoje...</option>
<option value="Beta" name="Beta">Beta (Pruebas)</option>
<option value="Oficial" name="Oficial">Oficial (Estable)</option>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['5'] ?>" style="width:11%;" disabled />// Estado de la empresa
<br /></p>

<br /><center>
<input name='submit' type='Submit' value='Guardar' id='login-submit' style='width:15%; height:40px; border-radius:5px;'></center>
</form>
</blockquote>
</td></tr></tbody></table>