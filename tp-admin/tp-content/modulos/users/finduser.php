     <div class="title">Visor de cuentas</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<center>
<form id="finduser"  method="POST" action="users.php?modulo=user">
Buscar por:<SELECT id="type" name="type">
	<OPTION Value="UserID">User ID</OPTION>
	<OPTION Value="Personaje">Personaje</OPTION>
	<OPTION Value="Email">Email</OPTION>
	<OPTION Value="RegIPAddress">IP</OPTION>
	<OPTION Value="idx">ID Unica</OPTION>
</SELECT>
  
<input type="text" id="search" name="search">
<br /><br />
<input type="Submit" Value="Buscar Usuario">
<input type="hidden" name="action" value="submitted">
</form>
</center>
<?php
if ($_POST['action'] == 'submitted')
{
$session = $_SESSION['username'];
$type = $_POST['type'];
$value = $_POST['search'];



if($type == 'Personaje'){
global $link;
mssql_select_db("Tantra",$link);
$weaA = mssql_query("SELECT * FROM TantraBackup00 WHERE Name1 = '$value' OR Name2 = '$value' OR Name3 '$value'");
$rowA = mssql_fetch_row($weaA);

if($rowA != ''){
$rowID = $rowA['UserID'];
global $link;
mssql_select_db("UserLogin",$link);
$weaB = mssql_query("SELECT * FROM Account WHERE UserID = '$rowID' ");
$rowB = mssql_fetch_row($weaB);
}
}
else
{
$weaB = mssql_query("SELECT * FROM Account WHERE $type = '$value' ");
$rowB = mssql_fetch_row($weaB);


if($rowB != ''){
global $link;
mssql_select_db("Tantra",$link);
$weaA = mssql_query("SELECT * FROM TantraBackup00 WHERE UserID = '$value'");
$rowA = mssql_fetch_row($weaA);
}
}

if($rowB != ''){
echo "Cuenta: " . $rowB['UserID'];

echo "ID: " . $rowB['ID'];
echo "<br>";
echo "Email: " . $rowB['Email'];
echo "<br>";
echo "UserKey: " . $rowB['UserKey'];
echo "<br>";
if($rowB['Blocked'] == '1'){
echo "<font color=red>Bloqueado</font><br>";
echo "Fecha de bloqueo: " . $rowB['BlockedDate'];
echo "<br>";
echo "Fecha de finalizado de bloqueo: " . $rowB['BlockedEndDate'];
echo "<br>";
echo "Fecha de desbloqueo: " . $rowB['UnBlockedDate'];
}
else
{
echo "Desbloqueado";
}

echo "<br>";
echo "Pregunta Secreta: " . $rowB['SecretQuestion'];
echo "<br>";
echo "Respuesta: " . $rowB['Answer'];
echo "<br>";
echo "Nombre completo: " . $rowB['Firstname'] . " " . $rowB['Lastname'];
echo "<br>";
echo "ZGCode: " . $rowB['ZGCode'];
echo "<br>";
echo "Activacion: " . $rowB['ZGActivation'];
echo "<br>";
echo "Activado: " . $rowB['Activated'];

echo "<br><br><br><hr><br>";

echo "Personaje 1: " . $rowA['Name1'] . " " . $rowA['Level1'] . " Brahman Points: " . $rowA['BrahmanPoint'] . " Guild: " . $rowA['GuildName'];
echo "<br>";
echo $rowA['Name2'] . $rowA['Level2'];
echo "<br>";
echo $rowA['Name3'] . $rowA['Level3'];
echo "<br>";

}
else
{
echo "No se han encontrado resultados.";
}
}
?>
</div>
</td>
</tr>
</table>

</td></tr></tbody></table>