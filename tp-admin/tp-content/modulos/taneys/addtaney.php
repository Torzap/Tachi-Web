     <div class="title">Enviar Tanys a cuenta</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<form name="form1" method="post" action="" class="style9">
      <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="92" height="22"><div align="right"><label>Cuenta:&nbsp;&nbsp;</label></div></td>
          <td width="230">
            <div align="left">
            <input name="account" type="text" id="account" placeholder="Nombre de la cuenta"></span>            </div></td>
        </tr>
        <tr>
          <td height="22"><div align="right"><label>Nuevos Tanys:&nbsp;&nbsp;</label></div></td>
          <td><input name="taney" type="text" id="taney" placeholder="Cantidad de tanys" VALUE="1000"><br /><br />
            <input id='login-submit' type="submit" name="Submit" value="Enviar Tanys" style="width:60%;"></td>
        </tr>
        <tr>
          <td height="22"><div align="right"><label>Tanys:</label> &nbsp;&nbsp;</div></td>
          <td><input name="TaneyCount" type="text" id="TaneyCount" placeholder="Ver tanys de la cuenta" /><br /><br />
            <input type="button" id='login-submit' style="width:60%;" name="Submit3" value="Ver" onclick="Load('TaneyCount','ajax.php?acc=taney_count&param1='+account.value,'GET',0)" /></td>
        </tr>
      </table>
        </form>
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