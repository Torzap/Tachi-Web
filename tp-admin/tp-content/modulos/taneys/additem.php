     <div class="title">Enviar premio a cuenta</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">


<form name="form1" method="post" action="" class="style9">
      <table width="61%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="157" height="22"><div align="right"><label>Cuenta:&nbsp;</label></div></td>
          <td width="226">
            <div align="left">
              <input name="account" type="text" id="account" placeholder="Nombre de cuenta">
            </div>          </td>
        </tr>
        <tr>
          <td height="22"><div align="right"><label>Item:&nbsp;&nbsp;</label></div></td>
          <td><input name="item" type="text" id="item" value="7067" placeholder="ID del Item"></td>
        </tr>
        <tr>
          <td height="22"><div align="right"><label>Cantidad:&nbsp;</label></div></td>
          <td><input name="count" type="text" id="count" value="1" placeholder="Cantidad a enviar"><br />
            <br /><input type="submit" id='login-submit' name="Submit" value="Enviar"></td>
        </tr>
      </table>
        </form>
<br>
<?php 
include ('../tw-config/conec.php'); 
if (isset($_POST['account'])) {
	$account = $_POST['account'];
	$item = $_POST['item'];
	$count = $_POST['count'];
	$T = new TantraClass();
	$T->init_db('tantra');
	$T->Exec("SELECT UserID FROM TantraBackup00 WHERE UserID = '$account'");
	if ($T->is_result())
	{
		$T->Exec("EXEC InsertTantraItem 0,'$account',$item,$count");
		$T->Exec("SELECT account FROM TantraItem WHERE account = '$account' AND itemIndex = $item AND itemcount = $count");
		if ($T->is_result())
		{
			echo '<span class="style10"><center>Item insertado correctamente!</center></div>';
		}
		else
		{
			echo '<span class="style10"><center>Ocurrio un error insertado el item...</center></div>';
		}
	}
	$T->close();
	$T = NULL; 
}
if (isset($_POST['Submit2'])) {
	$item = $_POST['item'];
	$count = $_POST['count'];
	$T = new TantraClass();
	$T->init_db('tantra');
	$T->Exec("SELECT UserID FROM TantraBackup00");
	for ($i=0;$i<$T->is_result();$i++)
	{
		$res = $T->gArray();
		$account = $res[0];
		$T->Update("EXEC InsertTantraItem 0,'$account',$item,$count");
	}
	echo '<span class="style10"><center>Query maybe success, too many accounts to check :)</center></div>';
	$T->close();
	$T = NULL; 
}
?>
</td></tr></tbody></table>