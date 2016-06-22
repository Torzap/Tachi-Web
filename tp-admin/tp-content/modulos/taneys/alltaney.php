     <div class="title">Enviar Tanys a todas las cuentas</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">


<form name="form2" method="post" action="" class="style9">
      <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="22"><div align="right"><label>Cantidad:&nbsp;&nbsp;</label></div></td>
          <td colspan="2"><input name="taney" type="text" id="taney" value="1000" placeholder="Cantidad a depositar">
                </td>
        </tr>
<tr>
<td height="22" colspan="3" align="center">
<input type="submit" 
name="Submit2" value="Enviar Tanys" id='login-submit' style="width:30%;"></td>
          </tr>
      </table>
    </form>
<br>
<br>
<?php  
if (isset($_POST['account'])) {
	$account = $_POST['account'];
	$count = $_POST['taney'];
	$T = new TantraClass();
	$T->init_db('bill');
	$T->Exec("SELECT userNumber,userId,cashBalance FROM tblUserInfo WHERE userId = '$account'");
	if ($T->is_result())
	{
		$res = $T->gArray();
		$usernum = $res[0];
		$amount = $res[2] + $count;
		$T->Exec("UPDATE tblUserInfo SET cashBalance = (cashBalance+$count) WHERE userNumber = $usernum");
		$T->Exec("SELECT cashBalance FROM tblUserInfo WHERE userNumber = $usernum AND cashBalance = $amount");
		if ($T->is_result())
		{
			echo '<span class="style10"><center>Tanys insertados con &eacute;xito!</center></div>';
		}
		else
		{
			echo '<span class="style10"><center>Ocurrio un error insertando tanys...</center></div>';
		}
	}
	$T->close();
	$T = NULL; 
}
if (isset($_POST['Submit2'])) {
	$count = $_POST['taney'];
	$T = new TantraClass();
	$T->init_db('bill');
	$T->Update("UPDATE tblUserInfo SET cashBalance = (cashBalance+$count)");
	echo '<span class="style10"><center>Query maybe success, too many accounts to check :)</center></div>';
	$T->close();
	$T = NULL; 
}
?>
</td></tr></tbody></table>