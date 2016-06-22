<?php
include('../../../../tw-config/conec.php');
$id=$_GET[id];
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("select * from tp_noticias where id='$id'");
$row = mysql_fetch_row($result);
?>	<div class="title">Editar noticia <?php echo $id; ?></div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<form action='news.php?news=editar' method='post' class='generic'>
<input type='hidden' name='id' id='id' value='<?php echo $id; ?>' />
<table width='100%' border='0'>
  <tr align='center'>
    <td><label>T&iacute;tulo:</label><input type='text' value='<?php echo $row['1'] ?>' name='titulo' maxlength='255' style='width:100%;' /></td>
    <td><label>Categor&iacute;a:</label><input type='text' name='categoria' value='<?php echo $row['2'] ?>'></td>
  </tr>
  <tr>
    <td colspan='2'><label>Muestra:<br/><textarea name='muestra' style='width:100%; height:200px;'><?php echo $row['4'] ?></textarea></label></td>
  </tr>
  <tr>
    <td colspan='2'><label>Contenido:<br/><textarea id='elm1' name='mensaje' style='width:100%; height:400px;'><?php echo $row['5'] ?></textarea></label></td>
  </tr>
  <tr align='center'>
    <td><label>Autor:</label>
	<input type='text' name='autor' value="<?php echo $row['3'] ?>" /></td>
    <td><label>Fecha:</label>
	<input type='text' name='fecha' value='<?php echo $row['6'] ?>' /></td>
  </tr>
  <tr>
    <td colspan='2' align='center'><div class='btnlogeo'><input type='submit' name='publicar' value='Guardar' id='login-submit'></div></td>
  </tr>
</table>
</form>
</td></tr></tbody></table>