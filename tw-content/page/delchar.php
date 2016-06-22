<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Eliminar personajes</span></div>
<br /><br />

<?php
if($logeado == 1){
?>					<div class="tw-lostpw"><table width="100%">
					<tr>
<td style="vertical-align: top;">
<?php
if ($_POST['action'] == 'submitted')
{

		$UserId= trim($_SESSION['username']);
		$querys = mssql_query("SELECT * FROM Account WHERE UserID='".$_SESSION['username']."'");
		$QRow = mssql_fetch_array($querys);
		$twsend=trim($_POST['TWcode']);
		$TWcode = $QRow['TWCode'];
		$userkey = $QRow['UserKey'];


	$error = "";
	function AllOK()
	{

		global $error, $TWcode, $twsend;

		if ($twsend != $TWcode)
		{
			$error .= "<div align=center>El TWCode es incorrecto.<br>
Por favor intente nuevamente.<br>
<a href=?tw=userkey>Regresar!</a>.";
			return 0;
		}

	return 1;
	}

	if (!AllOK())
	{
		$result = $error;
	}
	else
	{

$result = "Tu llave secreta para borrar personajes es: <br>
<font color='YellowGreen'><b>$userkey</b></font>";
	}
	echo "<center>";
	echo $result;
	echo "</center>";

}
else
{
?>

<script language="javascript" type="text/javascript">
	function valida(F) {

		if(F.TWcode.value == false ) {
                alert("Es necesario introducir tu TWCode para ver la llave secreta!")
                return false
        }

        
}
</script>

En <b><?php echo $Web['Name']; ?></b>, para borrar un char(personaje), es necesario para ello una llave secreta, que debe introducir dentro del juego.<br>
<br> Para saber cual es tu llave secreta, es necesario que acontinuacion introduzcas tu TWCode.<br><br>

<form method="POST" action="#" OnSubmit="return valida(this);">
<center>
<span>TW Code:</span>
<input value ="" placeholder="" style="width:150px;" maxlength="6" type="password" id="TWcode" name="TWcode"  />
<div style="padding:10px;"></div>
<p><input value="Solicitar" type="submit" name="submit" style="width: 100px;"></p>
<input type="hidden" name="action" value="submitted">
</center>
</form>
<?php } ?>					</td>
					</tr>
					</table></div>
<?php
}
?>