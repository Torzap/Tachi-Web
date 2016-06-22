     <div class="title">Configuraciones generales</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php 
include ('../tw-config/conec.php'); 

$titulo = $_POST[titulo];
$nombre = $_POST[nombre];
$ip = $_POST[ip];
$boton = $_POST[boton];

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_sttantra where id='1'");
$row = mysql_fetch_row($result);

$q="UPDATE tp_sttantra SET titulo='titulo', nombre='$nombre', ip='$ip', boton='$boton' WHERE id='1'";

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
<div id="volver"><a href="sttantra.php?modulo=options"><- Regresar</a></div>
</td></tr></tbody></table>