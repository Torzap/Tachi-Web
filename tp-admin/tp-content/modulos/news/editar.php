	<div class="title">Editar noticia <?php echo $id; ?></div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<p>
<?php
include('../../../../tw-config/conec.php');
$id=$_POST[id];
$titulo=$_POST[titulo];
$autor=$_POST[autor];
$categoria=$_POST[categoria];
$muestra=$_POST[muestra];
$mensaje=$_POST[mensaje];
$fecha = $_POST[fecha];
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

$connect=mysql_connect(SERVIDOR_MYSQL,USUARIO_MYSQL,PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$connect);

$result = mysql_query("SELECT * FROM tp_noticias where id='$id'");
$row = mysql_fetch_row($result);

$result=mysql_query("select * from tp_noticias where id='$id'",$connect);
$q="UPDATE tp_noticias SET titulo='$titulo', categoria='$categoria', autor='$autor', muestra='$muestra', mensaje='$mensaje', fecha='$fecha' url='urls_amigables($url)' WHERE id='$id'";

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
</p><br />
</td></tr></tbody></table>