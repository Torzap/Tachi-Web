<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Editar E-mail</span></div>
<br /><br />
<?php if($logeado == 1){?>
<div class="tw-lostpw"><table width="100%"><tr><td>
<?php
if ($_POST['action'] == 'submitted')
{
	
		$UserId= trim($_SESSION['username']);
		$oldemail=trim($_POST['oldemail']);
		$email=trim($_POST['email']);
		$email2=trim($_POST['email2']);
		$querys = mssql_query("SELECT * FROM Account WHERE UserID='".$_SESSION['username']."'");
		$QRow = mssql_fetch_array($querys);
		$num_rows = $QRow['Email'];
		$twsend=trim($_POST['twcode']);
		$twcode = $QRow['TWCode'];

	function is_email($oldemail){
	   $x = '\d\w!\#\$%&\'*+\-/=?\^_`{|}~';    //just for clarity
	
	   return count($oldemail = explode('@', $oldemail, 3)) == 2
	       && strlen($oldemail[0]) < 65
	       && strlen($oldemail[1]) < 256
	       && preg_match("#^[$x]+(\.?([$x]+\.)*[$x]+)?$#", $oldemail[0])
	       && preg_match('#^(([a-z0-9]+-*)?[a-z0-9]+\.)+[a-z]{2,6}.?$#', $oldemail[1]);
	}

	function is_email2($email){
	   $x = '\d\w!\#\$%&\'*+\-/=?\^_`{|}~';    //just for clarity
	
	   return count($email = explode('@', $email, 3)) == 2
	       && strlen($email[0]) < 65
	       && strlen($email[1]) < 256
	       && preg_match("#^[$x]+(\.?([$x]+\.)*[$x]+)?$#", $email[0])
	       && preg_match('#^(([a-z0-9]+-*)?[a-z0-9]+\.)+[a-z]{2,6}.?$#', $email[1]);
	}

	function is_email3($email2){
	   $x = '\d\w!\#\$%&\'*+\-/=?\^_`{|}~';    //just for clarity
	
	   return count($email2 = explode('@', $email2, 3)) == 2
	       && strlen($email2[0]) < 65
	       && strlen($email2[1]) < 256
	       && preg_match("#^[$x]+(\.?([$x]+\.)*[$x]+)?$#", $email2[0])
	       && preg_match('#^(([a-z0-9]+-*)?[a-z0-9]+\.)+[a-z]{2,6}.?$#', $email2[1]);
	}

	$error = "";
	function AllOK()
	{
		global $error,$UserId,$oldemail,$email,$email2,$num_rows,$twsend,$twcode;


		if (!is_email($oldemail)) {
			$error .= "Porfavor indique su reciente email correctamente.<br><a href=javascript:history.go(-1)>Volver!</a>";
			return 0;
		}

		if($oldemail != $num_rows){
			$error .= "Porfavor indique su reciente email correctamente.<br><a href=javascript:history.go(-1)>Volver!</a>";
			return 0;
		}

		if (!is_email2($email)) {
			$error .= "Por favor introduzca su nuevo e-mail correctamente.<br><a href=javascript:history.go(-1)>Volver!</a>";
			return 0;
		}

		if (!is_email3($email2)) {
			$error .= "Por favor confirme su nuevo e-mail correctamente.<br><a href=javascript:history.go(-1)>Volver!</a>";
			return 0;
		}

		if($email != $email2) {
			$error .= "Por favor confirme su nuevo e-mail correctamente.<br><a href=javascript:history.go(-1)>Volver!</a>";
			return 0;
		}

		if ($twsend != $twcode)
		{
			$error .= "El TWCode es incorrecto.<br>
<a href=javascript:history.go(-1)>Volver!</a>";
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
		mssql_query("UPDATE Account SET Email = '$email' WHERE UserID='".$_SESSION['username']."'");
		$result = "Sus datos han sido actualizados correctamente.";

	}
	echo "<div align=center>";
	echo $result;
	echo "</div>";
}
else
{

?>



<script language="javascript" type="text/javascript">
	function valida(F) {
		
		var mail_comp = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/
		
		if(F.oldemail.value == false ) {
                alert("Porfavor indique su reciente email correctamente.")
                return false
        }
		if(F.oldemail.value.length<6) {
                alert("Porfavor indique su reciente email correctamente.")
                return false
        }
		if(F.email.value == false ) {
                alert("Porfavor indique su nuevo email correctamente.")
                return false
        }
		if(F.email.value.length<6) {
                alert("Porfavor indique su nuevo email correctamente.")
                return false
        }
		if((F.email.value) !== (F.email2.value)) {
                alert("Por favor confirme su nuevo e-mail correctamente.")
                return false
        }
		if(F.twcode.value == false ) {
                alert("El TWCode es incorrecto.")
                return false
        }

        
}
</script>


Para cambiar su E-mail, es necesario que nos proporcione su TWCode.
<br><br>

<form id="formID" method="POST" action="#" OnSubmit="return valida(this);">

<table width="80%" align="center"><tr><td>

<span>Email actual:</span><div style="height: 4px;"></div>
<input value ="" style="width:200px;" type="text" id="oldemail" name="oldemail"  />
</td><td style="padding-left: 3px;">

<span>TWCode:</span><div style="height: 4px;"></div>
<input value ="" style="width:200px;" maxlength="7" type="password" id="twcode" name="twcode"  />

</td></tr>

<tr><td>
<span>Nuevo Email:</span><div style="height: 4px;"></div>
<input value ="" style="width:200px;" type="text" id="email" name="email"  />
</td><td style="padding-left: 3px;">

<span>Confirmar Email:</span><div style="height: 4px;"></div>
<input value ="" style="width:200px;" type="text" id="email2" name="email2"  />
</td></tr>
<tr><td colspan="2"><br />
<center>
<input value="Cambiar Email" type="submit" name="submit" style="width: 150px;" class="submit"></center>
</td></tr>
</table>
<input type="hidden" name="action" value="submitted">

</form>

<?php
}
?>					</td></tr></table></div>
<?php
}
?>