	<div class="title">Borrar noticia <?php echo $id; ?></div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<?php
include('../../../../tw-config/conec.php');
$id=$_GET[id];

$connect=mysql_connect(SERVIDOR_MYSQL,USUARIO_MYSQL,PASSWORD_MYSQL);

mysql_select_db(BASE_DATOS,$connect);

$sSQL="DELETE FROM tp_noticias WHERE id=$id";

mysql_query($sSQL);
?>
<div id="correct">
La noticia se ha eliminado correctamente</div>
</td></tr></tbody></table>