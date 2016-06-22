<?php
$conecta = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL) or die("No se ha podido conectar con el servidor MySQL. Inténtalo mas tarde.");
mysql_select_db(BASE_DATOS, $conecta);
?>
<?php
$noti1 = mysql_query("SELECT * FROM `tp_noticias` ORDER BY `id` DESC limit 100") or die (mysql_error()); 
?>	<div class="title">Noticias</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<p>
<?php

  echo '
<table width="750px" border="0" align="center">
  <tr align="center">
    <td width="250px"><b>Titulo</b></td>
    <td><b>Autor</b></td>
    <td><b>Categor&iacute;a</b></td>
    <td width="120px"><b>Fecha</b></td>
    <td width="80px"><b>Acciones</b></td>
  </tr>
'; 
while($noti = mysql_fetch_assoc($noti1)) 
{ ?>
    <tr>
    <td align="center"><?php echo ''.$noti['titulo'].''; ?></td>
    <td align="center"><?php echo ''.$noti['autor'].''; ?></td>
    <td align="center"><?php echo ''.$noti['categoria'].''; ?></td>
    <td align="center"><?php echo ''.$noti['fecha'].''; ?></td>
    <td align="center"><a href="news.php?news=editnoticia&id=<?php echo ''.$noti['id'].''; ?>">Editar</a>
	- 
	<a href="news.php?news=borrar&id=<?php echo ''.$noti['id'].''; ?>">Borrar</a></td>
  </tr>
<?php }
echo '</table>';
?>
</p><br />
</td></tr></tbody></table>