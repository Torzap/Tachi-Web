     <div class="title">Crear noticia nueva</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<p>
<br /> 
<?php
$conecta = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL) or die("No se ha podido conectar con el servidor MySQL. Inténtalo mas tarde.");
mysql_select_db(BASE_DATOS, $conecta);
?>
<form action="" method="post" class='generic'>
<table width="100%" border="0">
  <tr>
    <td><label>T&iacute;tulo:</label><input type="text" name="titulo" maxlength="255" style="width:100%;" /></td>
    <td align="right"><label>Categor&iacute;a:</label><select name="categoria">
        <option value="" disabled selected>Escoger de la Lista</option>
	<option>Noticias</option>
	<option>Eventos</option>
	<option>Mantenimiento</option>
	<option>Actualizaciones</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><label>Muestra:<br/><textarea name="muestra" style="width:100%; height:200px;"></textarea></label></td>
  </tr>
  <tr>
    <td colspan="2"><label>Contenido:<br/><textarea id="elm1" name="mensaje" style="width:100%; height:400px;"></textarea></label></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type='hidden' name="autor" value="<?php
$weaA = mssql_query("SELECT * FROM AdmAccount where Admin='" . $_SESSION['admusername'] . "'");
$rowA = mssql_fetch_row($weaA);
echo $rowA[3];
?>" hidden /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div class='btnlogeo'><input type="submit" name="publicar" value="Publicar" id='login-submit'></div></td>
  </tr>
</table>
</form>
<?php
$fecha = date("Y/n/d H/i/s");
function urls_amigables($url) {
   // Tranformamos todo a minusculas
   $url = strtolower($url);
   //Rememplazamos caracteres especiales latinos
   $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
   $repl = array('a', 'e', 'i', 'o', 'u', 'n');
   $url = str_replace ($find, $repl, $url);
   // Añaadimos los guiones
   $find = array(' ', '&', '\r\n', '\n', '+');
   $url = str_replace ($find, '-', $url);
   // Eliminamos y Reemplazamos demás caracteres especiales
   $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
   $repl = array('', '-', '');
   $url = preg_replace ($find, $repl, $url);
   return $url;
}
// La variable del título de la noticia
$url = ''.$_POST['titulo'].'';
if($_POST['publicar'] && $_POST['titulo'] && $_POST['categoria'] && $_POST['autor'] && $_POST['muestra'] && $_POST['mensaje'] && $fecha && urls_amigables($url)){
$act = "INSERT INTO tp_noticias (titulo,categoria,autor,muestra,mensaje,fecha,url) values ('".$_POST['titulo']."','".$_POST['categoria']."','".$_POST['autor']."','".$_POST['muestra']."','".$_POST['mensaje']."','".$fecha."','".urls_amigables($url)."')";
if(@mysql_query($act)){echo "<script>alert('¡Noticia Publicada!');</script>";
}}
?>
</p><br />
</td></tr></tbody></table>