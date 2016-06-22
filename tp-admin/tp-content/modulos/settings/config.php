     <div class="title">Configuraciones generales</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

?>
<blockquote><div class='login-wrap'>
<form name="actualizar" method="post" action="settings.php?modulo=act-config">
<label>Dominio de la web:</label><br />
<Input type="text" value="<?php echo $row['1'] ?>" style="width:35%;" id="dominio" name="dominio" />// Url o dominio de la web
<br />

<br />
<label>Nombre de la web:</label><br />
<Input type="text" value="<?php echo $row['2'] ?>" style="width:35%;" id="nombre" name="nombre" />// Titulo o nombre de la web
<br />

<br />
<label>Eslogan de la web:</label></label><br />
<Input type="text" value="<?php echo $row['3'] ?>" style="width:35%;" id="eslogan" name="eslogan" />// Eslogan o descripci&oacute;n de la web
<br />

<br />
<label>Dominio del foro:</label><br />
<Input type="text" value="<?php echo $row['4'] ?>" style="width:35%;" id="foro" name="foro" />// Url o dominio del foro
<br />

<br />
<label>Dominio del centro de soporte:</label><br />
<Input type="text" value="<?php echo $row['5'] ?>" style="width:35%;" id="soporte" name="soporte" />// Url o dominio del &aacute;rea de soporte
<br />

<br />
<label>Direcci&oacute;n de la webshop:</label><br />
<Input type="text" value="<?php echo $row['10'] ?>" style="width:35%;" id="shop" name="shop" />// Url o dominio del &aacute;rea de la tienda o cat&aacute;logo de items
<br />

<br />
<label>Idioma de la web:</label><br />
<select name="idioma" style="width:28%;">
<option value="es" name="es">Espa&ntildeol</option>
<option value="en" name="en">English</option>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['6'] ?>" style="width:5%;" disabled /> // es = Espa&ntildeol, en = English<br />

<br />
<label>Nombre del Skin de la web:</label><br />
<Input type="text" value="<?php echo $row['7'] ?>" style="width:35%;" id="skin" name="skin" />// Nombre de la carpeta de la plantilla
<br />

<br />
<label>Bot&oacute;n derecho del mouse:</label><br />
<select name="mouse" style="width:28%;">
<option value="true" name="true">Activar</option>
<option value="false" name="false">Desactivar</option>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['8'] ?>" style="width:5%;" disabled /> // true = habilitado, false = bloqueado<br />

<br />
<label>Cantidad de usuarios en el ranking:</label><br />
<select name="top" style="width:28%;">
<option value="5" name="5">5</option>
<option value="10" name="10">10</option>
<option value="20" name="20">20</option>
<option value="25" name="25">25</option>
<option value="30" name="30">30</option>
<option value="40" name="40">40</option>
<option value="50" name="50">50</option>
</select>&nbsp;&nbsp;
<Input type="text" value="<?php echo $row['11'] ?>" style="width:5%;" disabled />// N&uacute;mero de personajes a mostrar en el ranking <br />

<br />
<label>Direcci&oacute;n IP del servidor:</label><br />
<Input type="text" value="<?php echo $row['9'] ?>" style="width:35%;" id="ip" name="ip" />// IP del PC o Dedicado
<br /><br />
<p>
<center><div class='btnlogeo'><input name='submit' type='Submit' id='login-submit' value='Guardar'></div></center></p>
</form></div>
</blockquote>
</td></tr></tbody></table>