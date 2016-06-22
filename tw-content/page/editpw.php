<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Editar contrase&ntildea</span></div>
<br /><br />
<?php if($logeado == 1){?>			<div class="tw-lostpw"><table width="100%" align="center">
<tr>
<td style="vertical-align: top;">
						
<?php
if ($_POST['action'] == 'submitted')
{
	
		$UserID= trim($_SESSION['username']);
		$oldpass=trim($_POST['oldpass']);
		$password=trim($_POST['password']);
		$password2=trim($_POST['password2']);
		$initial=substr($UserID,0,1);
		$querys = mssql_query("SELECT * FROM Account WHERE UserID='".$_SESSION['username']."'");
		$QRow = mssql_fetch_array($querys);
		$num_rows = $QRow['Password'];
		$twsend=trim($_POST['twcode']);
		$twcode = $QRow['TWCode'];
		$userkey = $QRow['UserKey'];

	$error = "";
	function AllOK()
	{

		global $error, $num_rows, $oldpass, $password, $password2, $twcode, $twsend ;

		if ($num_rows != $oldpass)
		{
			$error .= "<div align=center>La contrase&ntilde;a antigua es incorrecta.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
			return 0;
		}
		if ($password == "")
		{
			$error .= "<div align=center>Fallo al colocar la nueva contrase&ntilde;a.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
			return 0;
		}
		if(!ereg("^[0-9a-zA-Z]{4,12}$",$password))
		{
			$error .= "<div align=center>Solo se permiten n&uacute;meros o letras, de 4 a 12 car&aacute;cteres.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
			return 0;
		}
		if ($password != $password2)
		{
			$error .= "<div align=center>Las contrase&ntilde;as no coinciden.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
			return 0;
		}
		if ($num_rows == $password)
		{
			$error .= "<div align=center>La contrase&ntilde;a antigua y la nueva contrase&ntilde;a son identicas.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
			return 0;
		}
		if ($twsend != $twcode)
		{
			$error .= "<div align=center>El TWCode es incorrecto.<br><a href=javascript:history.go(-1)>Volver!</a></div>";
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

		
		$fp = fopen("C:/Server/Share/Serv00/update/$UserID.txt","w");
		fwrite($fp,$UserID."\r\n");
		fwrite($fp,$password."\r\n");
		fwrite($fp,"000000\r\n");
		fwrite($fp,$userkey."\r\n");
		fclose($fp);

		mssql_query("UPDATE Account SET Password = '$password' WHERE UserID='".$_SESSION['username']."'");
		$result = "Los datos han sido actualizados correctamente !!.";

	}
	echo $result;
}
else
{
?>



<script language="javascript" type="text/javascript">
	function valida(F) {
		
		var mail_comp = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/
		
		if(F.oldpass.value == false ) {
                alert("La contrase&ntilde;a antigua es incorrecta.")
                return false
        }
		if(F.oldpass.value.length<6) {
                alert("La contrase&ntilde;a antigua es incorrecta.")
                return false
        }
		if(F.password.value == false ) {
                alert("Debes introducir la nueva contrase&ntilde;a.")
                return false
        }
		if(F.password.value.length<5) {
                alert("La contrase&ntilde;a es muy corta.")
                return false
        }
		if(F.password.value.length>15) {
                alert("La contrase&ntilde;a es muy larga.")
                return false
        }
		if((F.password.value) !== (F.password2.value)) {
                alert("Las contrase&ntilde;as no coinciden.")
                return false
        }
		if(F.twcode.value == false ) {
                alert("Porfavor introduzca su TWCode.")
                return false
        }

        
}
</script>

Para cambiar su contrase&ntilde;a, es necesario nos proporcione su TWCode.<br>
<br>
<form id="formID" method="POST" action="#" OnSubmit="return valida(this);">

<table width="60%" align="center"><tr><td>

<span>Contrase&ntilde;a actual:</span><div style="height: 4px;"></div>
<input value ="" style="width:150px;" maxlength="15" type="password" id="oldpass" name="oldpass"  /> 
</td><td>

<span>TW Code:</span><div style="height: 4px;"></div>
<input value ="" style="width:150px;" maxlength="6" type="password" id="twcode" name="twcode"  />
</td></tr>

<tr><td>
<span>Nueva contrase&ntilde;a:</span><div style="height: 4px;"></div>
<input value ="" style="width:150px;" maxlength="15" type="password" id="password" name="password"  />


</td>
<td>

<span>Confirmar contrase&ntilde;a:</span><div style="height: 4px;"></div>
<input value ="" style="width:150px;" maxlength="15" type="password" id="password2" name="password2"  /> 

</td></tr>

<tr><td colspan="2">
<br /><br />
<center>
<input value="Cambiar contrase&ntilde;a" type="submit" name="submit" style="width: 150px;" class="submit"></center>
</td></tr>
</table>
<input type="hidden" name="action" value="submitted">
</form>

<?php } ?>


					</div>
					</div>
					</div>

					</td>
					</tr>
					</table></div>

			</div>
		</div>

		<div id="center3">
		</div>
		
	</div>
<?php
}
?>