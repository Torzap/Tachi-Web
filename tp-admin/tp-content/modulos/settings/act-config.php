     <div class="title">Configuraciones generales</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php 
include ('../tw-config/conec.php'); 

$dominio = $_POST[dominio];
$nombre = $_POST[nombre];
$eslogan = $_POST[eslogan];
$foro = $_POST[foro];
$soporte = $_POST[soporte];
$idioma = $_POST[idioma];
$skin = $_POST[skin];
$mouse = $_POST[mouse];
$ip = $_POST[ip];
$shop = $_POST[shop];
$top = $_POST[top];

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

$q="UPDATE tp_settings SET dominio='$dominio', nombre='$nombre', eslogan='$eslogan', foro='$foro', soporte='$soporte', idioma='$idioma', skin='$skin', mouse='$mouse', ip='$ip', shop='$shop', top='$top' WHERE id='1'";

$rs=mysql_query($q);
if($rs == false)
{
echo '<div id="error">
Error al actualizar los datos</div>
<br />';
} else { 
echo '<div id="correct">
Los datos se han actualizado correctamente</div>
<br />';
}

?>
<div id="volver"><a href="settings.php?modulo=config"><- Regresar</a></div>
</td></tr></tbody></table>