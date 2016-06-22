     <div class="title">Configuraciones generales</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php 
include ('../tw-config/conec.php'); 

$guser = $_POST[guser];
$gpass = $_POST[gpass];
$umail = $_POST[umail];
$uname = $_POST[uname];

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_conec where id='1'");
$row = mysql_fetch_row($result);

$q="UPDATE tp_conec SET guser='$guser', gpass='$gpass', umail='$umail', uname='$uname' WHERE id='1'";

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
<div id="volver"><a href="settings.php?modulo=conec"><- Regresar</a></div>
</td></tr></tbody></table>