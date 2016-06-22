<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Desbugear personajes</span></div>
<br /><br />
  <?php
$weaA = mssql_query("SELECT * FROM Account where UserID='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
if ($rowA[15] == "1")
	{
		$SexA = "Hombre";	}
	else
	{
		$SexA = "Mujer";
	}
?>
<?php
if($logeado == 1){
$Dir = "C:\\Server\\DBSrv\\Account";

$userid = $_SESSION['username'];
global $link;
mssql_select_db("Tantra",$link);
$weaA = mssql_query("SELECT * FROM TantraBackup00 WHERE UserID = '$userid'");
$rowA = mssql_fetch_row($weaA);
?>

<div class="tw-registro" align="center"><form METHOD="Post" align="center">
<SELECT name="Character" style='width:150px;'>
<?php if($rowA[11] != ' '){ echo "<OPTION VALUE=$rowA[11]>$rowA[11]</option>"; } ?>
<?php if($rowA[12] != ' '){ echo "<OPTION VALUE=$rowA[11]>$rowA[12]</option>"; } ?>
<?php if($rowA[13] != ' '){ echo "<OPTION VALUE=$rowA[11]>$rowA[13]</option>"; } ?>
</SELECT><br /><br />
<input value="Desbugear" type="submit" name="submit" style='width:80px; height:24px; border-radius:5px;'>
<input type="hidden" name="action" value="submitted">
</form></div>

<?php
if ($_POST['action'] == 'submitted'){
$Character = $_POST['Character'];
$Initial=substr($userid,0,1);
$nombre_archivo = $Dir."\\".$Initial."\\".$userid.".TAD";
$f = @fopen($nombre_archivo,"r+") or die("$nombre_archivo");

if($Character = $rowA[11]){
@fseek($f, 150, SEEK_SET);
@fwrite($f,'',1) or die("Error");
@fseek($f, 160, SEEK_SET);
@fwrite($f,'÷',1) or die("Error");
@fseek($f, 162, SEEK_SET);
@fwrite($f,'Ú',1) or die("Error");
@fclose($f);
echo "<center>Su personaje ha sido enviado a mandara!</center>";
}

elseif($Character = $rowA[12]){
@fseek($f, 1838, SEEK_SET);
@fwrite($f,'',1) or die("Error");
@fseek($f, 1848, SEEK_SET);
@fwrite($f,'÷',1) or die("Error");
@fseek($f, 1850, SEEK_SET);
@fwrite($f,'Ú',1) or die("Error");
@fclose($f);
echo "<center>Su personaje ha sido enviado a mandara!</center>";
}

elseif($Character = $rowA[13]){
@fseek($f, 3526, SEEK_SET);
@fwrite($f,'',1) or die("Error");
@fseek($f, 3536, SEEK_SET);
@fwrite($f,'÷',1) or die("Error");
@fseek($f, 3538, SEEK_SET);
@fwrite($f,'Ú',1) or die("Error");
@fclose($f);
echo "Su personaje ha sido enviado a mandara!";
}

else{ echo "<center><span style='color:#C33'>Ha habido un error, intente nuevamente</span></center>"; }
}

}
else
{
?>
<script type="text/javascript">

var pagina = 'index.php';
var segundos = 5;

function redireccion() {

document.location.href=pagina;
}
setTimeout("redireccion()",segundos);

</script>
<?php
}
?>
<br /><br />
<center><span style="font-size:11px;">Elige el personaje a destrabar y a continuaci&oacute;n presiona el bot&oacute;n.</span></center>