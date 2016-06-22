 <div class="title">Configuraciones  de Email</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_conec where id='1'");
$row = mysql_fetch_row($result);

?>
<blockquote>
<form name="actualizar" method="post" action="settings.php?modulo=act-conec">

<label>Cuenta de correo GMail:</label><br />
<Input type="text" value="<?php echo $row['1'] ?>" style="width:35%;" id="guser" name="guser" />// Cuenta de GMail
<br />

<br />
<label>Contrase&ntildea del correo:</label><br />
<Input type="text" value="<?php echo $row['2'] ?>" style="width:35%;" id="gpass" name="gpass" />// Contrase&ntildea de la cuenta GMail
<br />

<br />
<label>Usuario de email:</label><br />
<Input type="text" value="<?php echo $row['3'] ?>" style="width:35%;" id="umail" name="umail" />// Correo con el cual enviar emails
<br />

<br />
<label>Remitente:</label><br />
<Input type="text" value="<?php echo $row['4'] ?>" style="width:35%;" id="uname" name="uname" />// Nombre del remitente
<br /></p>

<br /><center>
<input name='submit' type='Submit' value='Guardar' id='login-submit' style='width:15%; height:40px; border-radius:5px;'></center>
</form>
</blockquote>
</td></tr></tbody></table>