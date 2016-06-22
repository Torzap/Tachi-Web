     <div class="title">Configuraciones generales</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php 
include ('../tw-config/conec.php'); 

$wExp = $_POST[wExp];
$wRuph = $_POST[wRuph];
$wMst = $_POST[wMst];
$wKth = $_POST[wKth];
$wSta = $_POST[wSta];

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_rates where id='1'");
$row = mysql_fetch_row($result);

$q="UPDATE tp_conec SET wExp='$wExp', wRuph='$wRuph', wMst='$wMst', wKth='$wKth', wSta='$wSta' WHERE id='1'";

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
<div id="volver"><a href="settings.php?modulo=rates"><- Regresar</a></div>
</td></tr></tbody></table>